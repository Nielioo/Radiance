package com.radiance.radiance.view.gameMode.storyMode;

import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.widget.ConstraintLayout;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.ScrollView;
import android.widget.TextView;

import com.radiance.radiance.R;
import com.radiance.radiance.view.map.MapBridgeActivity;
import com.radiance.radiance.view.map.MapDarkJungleActivity;
import com.radiance.radiance.view.map.MapInTownActivity;
import com.radiance.radiance.view.map.MapForestActivity;
import com.radiance.radiance.view.map.MapParkActivity;
import com.radiance.radiance.view.map.MapRestoActivity;
import com.radiance.radiance.view.map.MapUnderwaterActivity;

public class StoryModeActivity extends AppCompatActivity {

    private ImageView return_button, stage1_button, stage2_button, stage3_button,
                      stage4_button, stage5_button, stage6_button, stage7_button;
    private LinearLayout stageButton_linearLayout, firstRow_linearLayout,
                         secondRow_linearLayout, thirdRow_linearLayout;
    private ScrollView stageButton_scrollView;
    private TextView title_textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
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
                Intent stageOne = new Intent(StoryModeActivity.this, MapBridgeActivity.class);
                startActivity(stageOne);
            }
        });

        stage2_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent stageTwo = new Intent(StoryModeActivity.this, MapRestoActivity.class);
                startActivity(stageTwo);
            }
        });

        stage3_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent stageThree = new Intent(StoryModeActivity.this, MapDarkJungleActivity.class);
                startActivity(stageThree);
            }
        });

        stage4_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent stageFour = new Intent(StoryModeActivity.this, MapParkActivity.class);
                startActivity(stageFour);
            }
        });

        stage5_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent stageFive = new Intent(StoryModeActivity.this, MapForestActivity.class);
                startActivity(stageFive);
            }
        });

        stage6_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent stageSix = new Intent(StoryModeActivity.this, MapUnderwaterActivity.class);
                startActivity(stageSix);
            }
        });

        stage7_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent stageSeven = new Intent(StoryModeActivity.this, MapInTownActivity.class);
                startActivity(stageSeven);
            }
        });
    }

    private void intiView() {
        return_button = findViewById(R.id.storyMode_return_button);
        stage1_button = findViewById(R.id.storyMode_stage1_button);
        stage2_button = findViewById(R.id.storyMode_stage2_button);
        stage3_button = findViewById(R.id.storyMode_stage3_button);
        stage4_button = findViewById(R.id.storyMode_stage4_button);
        stage5_button = findViewById(R.id.storyMode_stage5_button);
        stage6_button = findViewById(R.id.storyMode_stage6_button);
        stage7_button = findViewById(R.id.storyMode_stage7_button);
        stageButton_linearLayout = findViewById(R.id.storyMode_stageButton_linearLayout);
        firstRow_linearLayout = findViewById(R.id.storyMode_firstRow_linearLayout);
        secondRow_linearLayout = findViewById(R.id.storyMode_secondRow_linearLayout);
        thirdRow_linearLayout = findViewById(R.id.storyMode_thirdRow_linearLayout);
        stageButton_scrollView = findViewById(R.id.storyMode_stageButton_scrollView);
        title_textView = findViewById(R.id.storyMode_title_textView);
    }
}