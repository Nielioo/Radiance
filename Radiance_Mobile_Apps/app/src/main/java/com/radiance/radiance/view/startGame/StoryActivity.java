package com.radiance.radiance.view.startGame;

import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.widget.ConstraintLayout;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;

import com.google.gson.Gson;
import com.radiance.radiance.R;
import com.radiance.radiance.model.Dialogues;

import java.util.ArrayList;

public class StoryActivity extends AppCompatActivity {

    private ImageView dialogBox_imageView;
    private TextView dialog_textView, option1_textView, option2_textView, name_textView;
    private Dialogues model;
    private ConstraintLayout nextButton_constraintLayout;
    private LinearLayout option_linearLayout;

    private Bundle bundle;
    private int i = 0;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_story);

        initView();
        setListener();
    }

    private void setListener() {
        model = new Dialogues();
        String mDrawableName = bundle.getString("bgImage");
        Bundle newBundle = new Bundle();
        newBundle.putString("bgImage", String.valueOf(mDrawableName));
        Intent play = new Intent(StoryActivity.this, QuestionActivity.class);

        switch (bundle.getString("stage")){
            //STAGE 1
            case "1":
                newBundle.putString("stage", bundle.getString("stage"));
                switch (bundle.getString("level")){
                    case "1":
                        //LEVEL 1
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage1Level1().get(i));
                        if (i == 0){
                            name_textView.setVisibility(View.INVISIBLE);
                        }

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage1Level1().size()) {
                                    dialog_textView.setText(model.getStage1Level1().get(0));
                                    model.getStage1Level1();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage1Level1().get(i));
                                }
                            }
                        });
                        break;
                    case "5":
                        //LEVEL 5
                        newBundle.putString("level", bundle.getString("level"));

                        option1_textView.setText(model.getStage1Level5().get(1));
                        option2_textView.setText(model.getStage1Level5().get(2));

                        option1_textView.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                option_linearLayout.setVisibility(View.GONE);
                                dialog_textView.setText(model.getStage1Level5().get(3));
                                nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                                    @Override
                                    public void onClick(View v) {
                                        if (i == 2){
                                            name_textView.setVisibility(View.INVISIBLE);
                                        }
                                        model.getStage1Level5();
                                        play.putExtras(newBundle);
                                        startActivity(play);
                                        finish();
                                    }
                                });
                            }
                        });

                        option2_textView.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                option_linearLayout.setVisibility(View.GONE);
                                dialog_textView.setText(model.getStage1Level10().get(4));
                                nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                                    @Override
                                    public void onClick(View v) {
                                        model.getStage1Level10();
                                        play.putExtras(newBundle);
                                        startActivity(play);
                                        finish();
                                    }
                                });
                            }
                        });
                        break;
                    case "10":
                        //LEVEL 10
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage1Level10().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage1Level10().size()) {
                                    if (i == 2){
                                        name_textView.setText("Kamu");
                                    }
                                    model.getStage1Level10();
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage1Level10().get(i));
                                }
                            }
                        });
                        break;
                }
                break;
            case "2":
                //STAGE 2
                newBundle.putString("stage", bundle.getString("stage"));
                switch (bundle.getString("level")){
                    case "1":
                        //LEVEL 1
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage2Level1().get(i));
                        if (i == 0){
                            name_textView.setVisibility(View.INVISIBLE);
                        }

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage2Level1().size()) {
                                    dialog_textView.setText(model.getStage2Level1().get(0));
                                    model.getStage2Level1();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage2Level1().get(i));
                                }
                            }
                        });
                        break;
                    case "4":
                        //LEVEL 4
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage2Level4().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage2Level4().size()) {
                                    dialog_textView.setText(model.getStage2Level4().get(0));
                                    model.getStage2Level4();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage2Level4().get(i));
                                }
                            }
                        });
                        break;
                    case "7":
                        //LEVEL 7
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage2Level7().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage2Level7().size()) {
                                    dialog_textView.setText(model.getStage2Level7().get(0));
                                    model.getStage2Level7();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage2Level7().get(i));
                                }
                            }
                        });
                        break;
                    case "10":
                        //LEVEL 10
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage2Level10().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage2Level10().size()) {
                                    if (i == 3){
                                        option_linearLayout.setVisibility(View.VISIBLE);

                                        option1_textView.setText(model.getStage2Level10().get(4));
                                        option2_textView.setText(model.getStage2Level10().get(5));

                                        option1_textView.setOnClickListener(new View.OnClickListener() {
                                            @Override
                                            public void onClick(View v) {
                                                option_linearLayout.setVisibility(View.GONE);
                                                dialog_textView.setText(model.getStage2Level10().get(6));
                                                nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                                                    @Override
                                                    public void onClick(View v) {
                                                        play.putExtras(newBundle);
                                                        startActivity(play);
                                                        finish();
                                                    }
                                                });
                                            }
                                        });

                                        option2_textView.setOnClickListener(new View.OnClickListener() {
                                            @Override
                                            public void onClick(View v) {
                                                option_linearLayout.setVisibility(View.GONE);
                                                dialog_textView.setText(model.getStage2Level10().get(6));
                                                nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                                                    @Override
                                                    public void onClick(View v) {
                                                        play.putExtras(newBundle);
                                                        startActivity(play);
                                                        finish();
                                                    }
                                                });
                                            }
                                        });
                                    }
                                } else {
                                    dialog_textView.setText(model.getStage2Level10().get(i));
                                }
                            }
                        });
                        break;
                }
                break;
            case "3":
                //STAGE 3
                newBundle.putString("stage", bundle.getString("stage"));
                switch (bundle.getString("level")){
                    case "1":
                        //LEVEL 1
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage3Level1().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage3Level1().size()) {
                                    dialog_textView.setText(model.getStage3Level1().get(0));
                                    model.getStage3Level1();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage3Level1().get(i));
                                }
                            }
                        });
                        break;
                    case "3":
                        //LEVEL 3
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage3Level3().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage3Level3().size()) {
                                    dialog_textView.setText(model.getStage3Level3().get(0));
                                    model.getStage3Level3();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage3Level3().get(i));
                                }
                            }
                        });
                        break;
                    case "6":
                        //LEVEL 6
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage3Level6().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage3Level6().size()) {
                                    dialog_textView.setText(model.getStage3Level6().get(0));
                                    model.getStage3Level6();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage3Level6().get(i));
                                }
                            }
                        });
                        break;
                    case "10":
                        //LEVEL 10
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage3Level10().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage3Level10().size()) {
                                    dialog_textView.setText(model.getStage3Level10().get(0));
                                    model.getStage3Level10();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage3Level10().get(i));
                                }
                            }
                        });
                        break;
                }
                break;
            case "4":
                //STAGE 3
                newBundle.putString("stage", bundle.getString("stage"));
                switch (bundle.getString("level")){
                    case "1":
                        //LEVEL 1
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage4Level1().get(i));
                        if(i == 0){
                            name_textView.setVisibility(View.INVISIBLE);
                        }

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage4Level1().size()) {
                                    dialog_textView.setText(model.getStage4Level1().get(0));
                                    model.getStage4Level1();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage4Level1().get(i));
                                }
                            }
                        });
                        break;
                    case "3":
                        //LEVEL 3
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage4Level3().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage4Level3().size()) {
                                    dialog_textView.setText(model.getStage4Level3().get(0));
                                    model.getStage4Level3();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage4Level3().get(i));
                                }
                            }
                        });
                        break;
                    case "6":
                        //LEVEL 6
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage4Level6().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage4Level6().size()) {
                                    dialog_textView.setText(model.getStage4Level6().get(0));
                                    model.getStage4Level6();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage4Level6().get(i));
                                }
                            }
                        });
                        break;
                    case "10":
                        //LEVEL 10
                        newBundle.putString("level", bundle.getString("level"));
                        option_linearLayout.setVisibility(View.GONE);

                        dialog_textView.setText(model.getStage4Level10().get(i));

                        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
                            @Override
                            public void onClick(View v) {
                                i++;
                                if (i >= model.getStage4Level10().size()) {
                                    dialog_textView.setText(model.getStage4Level10().get(0));
                                    model.getStage4Level10();
                                    play.putExtras(newBundle);
                                    startActivity(play);
                                    finish();
                                } else {
                                    dialog_textView.setText(model.getStage4Level10().get(i));
                                }
                            }
                        });
                        break;
                }
                break;
        }
    }

    private void initView() {
        bundle = getIntent().getExtras();

        dialogBox_imageView = findViewById(R.id.rae_dialogBox_imageView);
        dialog_textView = findViewById(R.id.rae_dialog_textView);
        nextButton_constraintLayout = findViewById(R.id.rae_nextButton_constraintLayout);
        option_linearLayout = findViewById(R.id.rae_option_linearLayout);
        option1_textView = findViewById(R.id.rae_option1_textView);
        option2_textView = findViewById(R.id.rae_option2_textView);
        name_textView = findViewById(R.id.rae_name_textView);
//        option_linearLayout.setVisibility(View.GONE);
    }
}