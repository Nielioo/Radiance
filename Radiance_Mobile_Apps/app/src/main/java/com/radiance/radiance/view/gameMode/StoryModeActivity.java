package com.radiance.radiance.view.gameMode;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

import com.radiance.radiance.R;

public class StoryModeActivity extends AppCompatActivity {

    private ImageView return_button, stage1_button, stage2_button, stage3_button,
                      stage4_button, stage5_button, stage6_button, stage7_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_story_mode);

        intiView();
        setListener();
    }

    private void setListener() {

        return_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });

        stage1_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                Intent stageOne = new Intent(StoryModeActivity.this, ------.class);
//                startActivity(stageOne);
            }
        });

        stage2_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                Intent stageTwo = new Intent(StoryModeActivity.this, ------.class);
//                startActivity(stageTwo);
            }
        });

        stage3_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                Intent stageThree = new Intent(StoryModeActivity.this, ------.class);
//                startActivity(stageThree);
            }
        });

        stage4_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                Intent stageFour = new Intent(StoryModeActivity.this, ------.class);
//                startActivity(stageFour);
            }
        });

        stage5_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                Intent stageFive = new Intent(StoryModeActivity.this, ------.class);
//                startActivity(stageFive);
            }
        });

        stage6_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                Intent stageSix = new Intent(StoryModeActivity.this, ------.class);
//                startActivity(stageSix);
            }
        });

        stage7_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
//                Intent stageSeven = new Intent(StoryModeActivity.this, ------.class);
//                startActivity(stageSeven);
            }
        });
    }

    private void intiView() {
        return_button = findViewById(R.id.gameMode_return_button);
        stage1_button = findViewById(R.id.storyMode_stage1_button);
        stage2_button = findViewById(R.id.storyMode_stage2_button);
        stage3_button = findViewById(R.id.storyMode_stage3_button);
        stage4_button = findViewById(R.id.storyMode_stage4_button);
        stage5_button = findViewById(R.id.storyMode_stage5_button);
        stage6_button = findViewById(R.id.storyMode_stage6_button);
        stage7_button = findViewById(R.id.storyMode_stage7_button);
    }
}