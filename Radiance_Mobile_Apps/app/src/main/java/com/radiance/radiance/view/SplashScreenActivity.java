package com.radiance.radiance.view;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;
import android.widget.TextView;

import com.radiance.radiance.InternetConnection;
import com.radiance.radiance.R;

public class SplashScreenActivity extends AppCompatActivity {

    InternetConnection connection;
    private TextView supported_by, uc;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash_screen);

        initView();

        connection = new InternetConnection(this);
        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                Intent start = new Intent(SplashScreenActivity.this, LoginActivity.class);
                start.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
                startActivity(start);
                finish();
            }
        },1500);
    }

    private void initView() {
        supported_by = findViewById(R.id.supported_by);
        uc = findViewById(R.id.uc);
    }
}