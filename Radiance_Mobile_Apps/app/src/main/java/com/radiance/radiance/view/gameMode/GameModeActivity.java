package com.radiance.radiance.view.gameMode;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;

import androidx.appcompat.app.AppCompatActivity;

import com.radiance.radiance.R;

public class GameModeActivity extends AppCompatActivity {

    private ImageView storyMode_button, timeMode_button, return_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_game_mode);

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

        storyMode_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent story = new Intent(GameModeActivity.this, StoryModeActivity.class);
                startActivity(story);
            }
        });

//        timeMode_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
////                Intent time = new Intent(GameModeActivity.this, -------.class);
////                startActivity(time);
//            }
//        });
    }

    private void intiView() {
        storyMode_button = findViewById(R.id.gameMode_storyMode_button);
        timeMode_button = findViewById(R.id.gameMode_timeMode_button);
        return_button = findViewById(R.id.gameMode_return_button);
    }
}
