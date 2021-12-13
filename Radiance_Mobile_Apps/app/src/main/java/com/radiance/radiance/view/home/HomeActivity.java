package com.radiance.radiance.view.home;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;

import com.radiance.radiance.R;
import com.radiance.radiance.view.gameMode.GameModeActivity;

public class HomeActivity extends AppCompatActivity {

    private Button play_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);

        initView();
    }

    private void initView() {
        play_button = findViewById(R.id.play_button);

        play_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent play = new Intent(HomeActivity.this, GameModeActivity.class);
                startActivity(play);
            }
        });
    }
}