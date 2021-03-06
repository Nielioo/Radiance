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
import com.radiance.radiance.view.auth.login.LoginActivity;
import com.radiance.radiance.view.gameMode.GameModeActivity;
import com.radiance.radiance.view.home.TimeChallengeHistory.LeaderboardActivity;
import com.radiance.radiance.view.home.profile.ProfileActivity;

public class HomeActivity extends AppCompatActivity {

    private Button play_button;
    private ImageView home_profileBorder_imageView, home_leaderboard_imageView;

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

        home_profileBorder_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity.this, ProfileActivity.class);
                startActivity(intent);
            }
        });

        home_leaderboard_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Intent intent = new Intent(HomeActivity.this, LeaderboardActivity.class);
                startActivity(intent);
            }
        });

    }

    private void initView() {
        play_button = findViewById(R.id.home_play_button);
        home_profileBorder_imageView = findViewById(R.id.home_profileBorder_imageView);
        home_leaderboard_imageView = findViewById(R.id.home_leaderboard_imageView);
    }
}