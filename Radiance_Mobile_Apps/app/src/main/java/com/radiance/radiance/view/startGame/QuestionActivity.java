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
import com.radiance.radiance.view.map.MapBridgeActivity;
import com.radiance.radiance.view.map.MapDarkJungleActivity;
import com.radiance.radiance.view.map.MapForestActivity;
import com.radiance.radiance.view.map.MapInTownActivity;
import com.radiance.radiance.view.map.MapParkActivity;
import com.radiance.radiance.view.map.MapRestoActivity;
import com.radiance.radiance.view.map.MapUnderwaterActivity;

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

    }

    private void setQuestion() {
        problemViewModel.init(helper.getAccessToken());
        problemViewModel.getProblem(bundle.getString("stage"), bundle.getString("level"));
        problemViewModel.getResultProblem().observe(this, problem -> {
            if (problem != null) {
                String studentId = String.valueOf(problem.getStudent_id());
                String stage = problem.getStage();
                String level = problem.getLevel();
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
                    if (problem.getAnswers().get(0).getIsTrue() == 1) {
                        play_optionBar1_imageView.setImageResource(R.drawable.option_bar_true);
                    } else {
                        play_optionBar1_imageView.setImageResource(R.drawable.option_bar_false);
                    }
                });

                play_optionBar2_imageView.setOnClickListener(view -> {
                    saveProgress(stage, level, studentId, levelId, problem.getAnswers().get(1).getIsTrue());
                    if (problem.getAnswers().get(1).getIsTrue() == 1) {
                        play_optionBar2_imageView.setImageResource(R.drawable.option_bar_true);
                    } else {
                        play_optionBar2_imageView.setImageResource(R.drawable.option_bar_false);
                    }
                });

                play_optionBar3_imageView.setOnClickListener(view -> {
                    saveProgress(stage, level, studentId, levelId, problem.getAnswers().get(2).getIsTrue());
                    if (problem.getAnswers().get(2).getIsTrue() == 1) {
                        play_optionBar3_imageView.setImageResource(R.drawable.option_bar_true);
                    } else {
                        play_optionBar3_imageView.setImageResource(R.drawable.option_bar_false);
                    }
                });

                play_optionBar4_imageView.setOnClickListener(view -> {
                    saveProgress(stage, level, studentId, levelId, problem.getAnswers().get(3).getIsTrue());
                    if (problem.getAnswers().get(3).getIsTrue() == 1) {
                        play_optionBar4_imageView.setImageResource(R.drawable.option_bar_true);
                    } else {
                        play_optionBar4_imageView.setImageResource(R.drawable.option_bar_false);
                    }
                });

                play_next_imageView.setOnClickListener(view -> {
                    Intent intent;
                    Bundle bundle = new Bundle();
                    bundle.putString("level", "10");
                    switch (stage) {
                        case "1":
                            switch (level) {
                                case "10":
                                    intent = new Intent(QuestionActivity.this, StoryActivity.class);
                                    bundle.putString("stage", "1");
                                    intent.putExtras(bundle);
                                    break;
                                default:
                                    intent = new Intent(QuestionActivity.this, MapBridgeActivity.class);
                                    break;
                            }
                            break;
                        case "2":
                            switch (level) {
                                case "10":
                                    intent = new Intent(QuestionActivity.this, StoryActivity.class);
                                    bundle.putString("stage", "2");
                                    intent.putExtras(bundle);
                                    break;
                                default:
                                    intent = new Intent(QuestionActivity.this, MapRestoActivity.class);
                                    break;
                            }
                            break;
                        case "3":
                            switch (level) {
                                case "10":
                                    intent = new Intent(QuestionActivity.this, StoryActivity.class);
                                    bundle.putString("stage", "3");
                                    intent.putExtras(bundle);
                                    break;
                                default:
                                    intent = new Intent(QuestionActivity.this, MapDarkJungleActivity.class);
                                    break;
                            }
                            break;
                        case "4":
                            switch (level) {
                                case "10":
                                    intent = new Intent(QuestionActivity.this, StoryActivity.class);
                                    bundle.putString("stage", "4");
                                    intent.putExtras(bundle);
                                    break;
                                default:
                                    intent = new Intent(QuestionActivity.this, MapParkActivity.class);
                                    break;
                            }
                            break;
                        case "5":
                            switch (level) {
                                case "10":
                                    intent = new Intent(QuestionActivity.this, StoryActivity.class);
                                    bundle.putString("stage", "5");
                                    intent.putExtras(bundle);
                                    break;
                                default:
                                    intent = new Intent(QuestionActivity.this, MapForestActivity.class);
                                    break;
                            }
                            break;
                        case "6":
                            switch (level) {
                                case "10":
                                    intent = new Intent(QuestionActivity.this, StoryActivity.class);
                                    bundle.putString("stage", "6");
                                    intent.putExtras(bundle);
                                    break;
                                default:
                                    intent = new Intent(QuestionActivity.this, MapUnderwaterActivity.class);
                                    break;
                            }
                            break;
                        case "7":
                            switch (level) {
                                case "10":
                                    intent = new Intent(QuestionActivity.this, StoryActivity.class);
                                    bundle.putString("stage", "7");
                                    intent.putExtras(bundle);
                                    break;
                                default:
                                    intent = new Intent(QuestionActivity.this, MapInTownActivity.class);
                                    break;
                            }
                            break;
                        default:
                            throw new IllegalStateException("Unexpected value: " + stage);
                    }
                    startActivity(intent);
                    finish();
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

        helper = SharedPreferenceHelper.getInstance(this);
        storyViewModel = new ViewModelProvider(this).get(StoryViewModel.class);
        problemViewModel = new ViewModelProvider(this).get(ProblemViewModel.class);

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


        // Default setting
        play_next_imageView.setVisibility(View.INVISIBLE);
        play_next_textView.setVisibility(View.INVISIBLE);
    }
}