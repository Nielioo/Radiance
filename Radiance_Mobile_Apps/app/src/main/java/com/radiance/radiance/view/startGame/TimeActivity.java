package com.radiance.radiance.view.startGame;

import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.widget.ConstraintLayout;
import androidx.lifecycle.ViewModelProvider;

import android.content.Intent;
import android.content.res.ColorStateList;
import android.graphics.Color;
import android.os.Bundle;
import android.os.CountDownTimer;
import android.util.Log;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.TextView;

import com.radiance.radiance.R;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.view.gameMode.GameModeActivity;
import com.radiance.radiance.view.gameMode.problem.ProblemViewModel;
import com.radiance.radiance.view.gameMode.storyMode.StoryViewModel;
import com.radiance.radiance.view.gameMode.timeChallenge.TimeChallengeViewModel;

import java.util.Locale;

public class TimeActivity extends AppCompatActivity {

    private ImageView play_optionBar1_imageView, play_optionBar2_imageView, play_optionBar3_imageView, play_optionBar4_imageView;
    private TextView time_score_textView, time_timer_textView, play_question_textView, play_option1_textView, play_option2_textView,
            play_option3_textView, play_option4_textView;

    private TimeChallengeViewModel timeChallengeViewModel;
    private ProblemViewModel problemViewModel;
    private SharedPreferenceHelper helper;

    private static final String TAG = "TimeActivity";
    private static final long COUNTDOWN_IN_MILLIS = 5000; //5 minutes
    private ColorStateList defaultColorText;
    private CountDownTimer countDownTimer;
    private long timeLeftInMillis;
    private int score;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_time);

        initView();
        setQuestion();
        startQuiz();
    }

    private void checkAnswer(int isTrue) {
        if (isTrue == 1) {
            score += 10;
        } else {
            if (score > 0) {
                score -= 10;
            }
        }

        time_score_textView.setText(String.valueOf(score));
        setQuestion();
    }

    private void saveTimeChallenge() {
        problemViewModel.init(helper.getAccessToken());
        problemViewModel.getRandomProblem();
        problemViewModel.getResultRandomProblem().observe(this, problem -> {
            timeChallengeViewModel.init(helper.getAccessToken());
            timeChallengeViewModel.addTimeChallengeHistory(String.valueOf(problem.getStudent_id()), String.valueOf(score));

            // Redirect to leaderboard
            Intent intent = new Intent(TimeActivity.this, GameModeActivity.class);
            startActivity(intent);
            finish();
        });
    }

    private void startQuiz() {
        timeLeftInMillis = COUNTDOWN_IN_MILLIS;
        startCountDown();
    }

    private void startCountDown() {
        countDownTimer = new CountDownTimer(timeLeftInMillis, 1000) {
            @Override
            public void onTick(long millisUntilFinished) {
                timeLeftInMillis = millisUntilFinished;
                updateCountDownText();
            }

            @Override
            public void onFinish() {
                timeLeftInMillis = 0;
                updateCountDownText();
                saveTimeChallenge();
            }
        }.start();
    }

    private void updateCountDownText() {
        int minutes = (int) (timeLeftInMillis / 1000) / 60;
        int seconds = (int) (timeLeftInMillis / 1000) % 60;

        String timeFormatted = String.format(Locale.getDefault(), "%02d:%02d", minutes, seconds);
        time_timer_textView.setText(timeFormatted);

        if (timeLeftInMillis < 60000) {
            time_timer_textView.setTextColor(Color.parseColor("#FA3333"));
        } else {
            time_timer_textView.setTextColor(defaultColorText);
        }
    }

    private void setQuestion() {
        problemViewModel.init(helper.getAccessToken());
        problemViewModel.getRandomProblem();
        problemViewModel.getResultRandomProblem().observe(this, problem -> {
            if (problem != null) {
                String studentId = String.valueOf(problem.getStudent_id());
                // Set text of question and answer
                play_question_textView.setText(problem.getProblem().getProblem());
                play_option1_textView.setText(problem.getAnswers().get(0).getAnswer());
                play_option2_textView.setText(problem.getAnswers().get(1).getAnswer());
                play_option3_textView.setText(problem.getAnswers().get(2).getAnswer());
                play_option4_textView.setText(problem.getAnswers().get(3).getAnswer());

                // Set listener of option bars
                play_optionBar1_imageView.setOnClickListener(view -> {
                    checkAnswer(problem.getAnswers().get(0).getIsTrue());
                });

                play_optionBar2_imageView.setOnClickListener(view -> {
                    checkAnswer(problem.getAnswers().get(1).getIsTrue());
                });

                play_optionBar3_imageView.setOnClickListener(view -> {
                    checkAnswer(problem.getAnswers().get(2).getIsTrue());
                });

                play_optionBar4_imageView.setOnClickListener(view -> {
                    checkAnswer(problem.getAnswers().get(3).getIsTrue());
                });
            } else {
                Log.e(TAG, "setQuestion: problem is null");
            }
        });
    }

    private void initView() {
        score = 0;

        helper = SharedPreferenceHelper.getInstance(this);
        timeChallengeViewModel = new ViewModelProvider(this).get(TimeChallengeViewModel.class);
        problemViewModel = new ViewModelProvider(this).get(ProblemViewModel.class);

        time_score_textView = findViewById(R.id.time_score_textView);
        time_timer_textView = findViewById(R.id.time_timer_textView);
        defaultColorText = time_timer_textView.getTextColors();
        play_question_textView = findViewById(R.id.play_question_textView);
        play_optionBar1_imageView = findViewById(R.id.play_optionBar1_imageView);
        play_optionBar2_imageView = findViewById(R.id.play_optionBar2_imageView);
        play_optionBar3_imageView = findViewById(R.id.play_optionBar3_imageView);
        play_optionBar4_imageView = findViewById(R.id.play_optionBar4_imageView);
        play_option1_textView = findViewById(R.id.play_option1_textView);
        play_option2_textView = findViewById(R.id.play_option2_textView);
        play_option3_textView = findViewById(R.id.play_option3_textView);
        play_option4_textView = findViewById(R.id.play_option4_textView);
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        if (countDownTimer != null) {
            countDownTimer.cancel();
        }
    }
}