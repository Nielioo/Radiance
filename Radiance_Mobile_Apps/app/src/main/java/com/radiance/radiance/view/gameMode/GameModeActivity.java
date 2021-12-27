package com.radiance.radiance.view.gameMode;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.ImageView;

import androidx.appcompat.app.AppCompatActivity;

import com.radiance.radiance.R;

public class GameModeActivity extends AppCompatActivity {

    private ImageView storyMode_button, timeMode_button, return_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_game_mode);

        intiView();
    }

    private void intiView() {
        storyMode_button = findViewById(R.id.gameMode_storyMode_button);
        timeMode_button = findViewById(R.id.gameMode_timeMode_button);
        return_button = findViewById(R.id.storyMode_return_button);

        storyMode_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent play = new Intent(GameModeActivity.this, StoryModeActivity.class);
                startActivity(play);
            }
        });

//        timeMode_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent play = new Intent(GameModeActivity.this, TimeModeActivity.class);
//                startActivity(play);
//            }
//        });
    }
}
