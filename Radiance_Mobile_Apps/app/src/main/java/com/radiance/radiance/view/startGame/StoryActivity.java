package com.radiance.radiance.view.startGame;

import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.widget.ConstraintLayout;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.TextView;

import com.radiance.radiance.R;
import com.radiance.radiance.model.Dialogues;

public class StoryActivity extends AppCompatActivity {

    private ImageView dialogBox_imageView;
    private TextView dialog_textView;
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
        dialog_textView.setText(model.getStage1Level1().get(i));

        nextButton_constraintLayout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                i++;
                if (i >= model.getStage1Level1().size()) {
                    String mDrawableName = bundle.getString("bgImage");
                    Bundle newBundle = new Bundle();
                    newBundle.putString("bgImage", String.valueOf(mDrawableName));
                    newBundle.putString("stage", bundle.getString("stage"));
                    newBundle.putString("level", bundle.getString("level"));
                    Intent play = new Intent(StoryActivity.this, QuestionActivity.class);
                    play.putExtras(newBundle);
                    startActivity(play);
                    finish();
                } else {
                    dialog_textView.setText(model.getStage1Level1().get(i));
                }
            }
        });
    }

    private void initView() {
        bundle = getIntent().getExtras();

        dialogBox_imageView = findViewById(R.id.rae_dialogBox_imageView);
        dialog_textView = findViewById(R.id.rae_dialog_textView);
        nextButton_constraintLayout = findViewById(R.id.rae_nextButton_constraintLayout);
        option_linearLayout = findViewById(R.id.rae_option_linearLayout);

        option_linearLayout.setVisibility(View.GONE);
    }
}