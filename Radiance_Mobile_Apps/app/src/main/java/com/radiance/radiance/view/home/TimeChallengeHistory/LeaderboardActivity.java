package com.radiance.radiance.view.home.TimeChallengeHistory;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;

import com.radiance.radiance.R;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.view.home.profile.ProfileViewModel;

public class LeaderboardActivity extends AppCompatActivity {

    private ImageView return_imageView;

    private TimeChallengeHistoryViewModel timeChallengeHistoryViewModel;
    private SharedPreferenceHelper helper;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_leaderboard);

        initView();
        clickListener();
        setLeaderboard();
    }

    private void setLeaderboard(){

    }

    private void clickListener() {
        return_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }

    private void initView() {
        return_imageView = findViewById(R.id.leaderboard_return_button);
    }
}