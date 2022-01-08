package com.radiance.radiance.view.home;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.TextView;

import com.radiance.radiance.R;

public class ProfileActivity extends AppCompatActivity {

    private ImageView return_imageView;
    private TextView username_textView, name_textView, birthdate_textView, school_textView, city_textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_profile);

        initView();
        clickListener();
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