package com.radiance.radiance.view.startGame;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;

import android.content.Intent;
import android.content.res.Resources;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.radiance.radiance.R;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.view.gameMode.problem.ProblemViewModel;
import com.radiance.radiance.view.gameMode.storyMode.StoryViewModel;

public class QuestionActivity extends AppCompatActivity {

    private ImageView bg_imageView, play_optionBar1_imageView, play_optionBar2_imageView, play_optionBar3_imageView, play_optionBar4_imageView, play_next_imageView;
    private TextView question_textView, play_option1_textView, play_option2_textView, play_option3_textView, play_option4_textView, play_next_textView;

    private StoryViewModel storyViewModel;
    private ProblemViewModel problemViewModel;
    private SharedPreferenceHelper helper;

    private Bundle bundle;
    private static final String TAG = "QuestionActivity";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_question);

        initView();
        setBackground();
        setQuestion();
        setListener();
    }

    private void saveProgress(String stage, String level, String studentId, String levelId, int isTrue) {
        int star;

        if (isTrue == 1) {
            star = 3;
        } else {
            star = 0;
        }

        storyViewModel.init(helper.getAccessToken());
        storyViewModel.addStoryHistory(stage, level, studentId, levelId, String.valueOf(star));

        play_next_imageView.setVisibility(View.VISIBLE);
        play_next_textView.setVisibility(View.VISIBLE);
    }

    private void setListener() {
        play_next_imageView.setOnClickListener(view -> {
            finish();
        });
    }

    private void setQuestion() {
        problemViewModel.init(helper.getAccessToken());
        problemViewModel.getProblem(bundle.getString("stage"), bundle.getString("level"));
        problemViewModel.getResultProblem().observe(this, problem -> {
            if (problem != null) {
                String stage = problem.getStage();
                String level = problem.getLevel();
                // TODO Change student ID to make it dynamic
                String studentId = "1";
                String levelId = String.valueOf(problem.getLevel_id());

                // Set text of question and answer
                question_textView.setText(problem.getProblems().getProblem());
                play_option1_textView.setText(problem.getAnswers().get(0).getAnswer());
                play_option2_textView.setText(problem.getAnswers().get(1).getAnswer());
                play_option3_textView.setText(problem.getAnswers().get(2).getAnswer());
                play_option4_textView.setText(problem.getAnswers().get(3).getAnswer());

                // Set listener of option bars
                play_optionBar1_imageView.setOnClickListener(view -> {
                    saveProgress(stage, level, studentId, levelId, problem.getAnswers().get(0).getIsTrue());
                });

                play_optionBar2_imageView.setOnClickListener(view -> {
                    saveProgress(stage, level, studentId, levelId, problem.getAnswers().get(1).getIsTrue());
                });

                play_optionBar3_imageView.setOnClickListener(view -> {
                    saveProgress(stage, level, studentId, levelId, problem.getAnswers().get(2).getIsTrue());
                });

                play_optionBar4_imageView.setOnClickListener(view -> {
                    saveProgress(stage, level, studentId, levelId, problem.getAnswers().get(3).getIsTrue());
                });
            } else {
                Log.e(TAG, "setQuestion: problem is null");
            }
        });
    }

    private void setBackground() {
        Resources res = getResources();
        String mDrawableName = bundle.getString("bgImage");
        int resID = res.getIdentifier(mDrawableName, "drawable", getPackageName());
        bg_imageView.setImageResource(resID);
    }

    private void initView() {
        bundle = getIntent().getExtras();

        bg_imageView = findViewById(R.id.play_background_imageView);
        question_textView = findViewById(R.id.play_question_textView);
        play_optionBar1_imageView = findViewById(R.id.play_optionBar1_imageView);
        play_optionBar2_imageView = findViewById(R.id.play_optionBar2_imageView);
        play_optionBar3_imageView = findViewById(R.id.play_optionBar3_imageView);
        play_optionBar4_imageView = findViewById(R.id.play_optionBar4_imageView);
        play_next_imageView = findViewById(R.id.play_next_imageView);
        play_option1_textView = findViewById(R.id.play_option1_textView);
        play_option2_textView = findViewById(R.id.play_option2_textView);
        play_option3_textView = findViewById(R.id.play_option3_textView);
        play_option4_textView = findViewById(R.id.play_option4_textView);
        play_next_textView = findViewById(R.id.play_next_textView);

        helper = SharedPreferenceHelper.getInstance(this);

        storyViewModel = new ViewModelProvider(this).get(StoryViewModel.class);
        problemViewModel = new ViewModelProvider(this).get(ProblemViewModel.class);

        // Default setting
        play_next_imageView.setVisibility(View.INVISIBLE);
        play_next_textView.setVisibility(View.INVISIBLE);
    }
}