package com.radiance.radiance.view.home;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;
import android.widget.ImageView;

import com.radiance.radiance.R;
import com.radiance.radiance.view.gameMode.GameModeActivity;

public class HomeActivity extends AppCompatActivity {

    private Button play_button;
    private ImageView profilePicture_imageView, leaderboard_imageView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_home);

        initView();
        setListener();
    }

    private void setListener() {
        play_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent play = new Intent(HomeActivity.this, GameModeActivity.class);
                startActivity(play);
            }
        });

        profilePicture_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent profile = new Intent(HomeActivity.this, ProfileActivity.class);
                startActivity(profile);
            }
        });

        leaderboard_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent leaderboard = new Intent(HomeActivity.this, LeaderboardActivity.class);
                startActivity(leaderboard);
            }
        });
    }

    private void initView() {
        play_button = findViewById(R.id.home_play_button);
        profilePicture_imageView = findViewById(R.id.home_profilePicture_imageView);
        leaderboard_imageView = findViewById(R.id.home_leaderboard_imageView);
    }
}