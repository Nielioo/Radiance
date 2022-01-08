package com.radiance.radiance.view.startGame;

import androidx.appcompat.app.AppCompatActivity;
import androidx.constraintlayout.widget.ConstraintLayout;

import android.content.res.ColorStateList;
import android.graphics.Color;
import android.os.Bundle;
import android.os.CountDownTimer;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.TextView;

import com.radiance.radiance.R;

import java.util.Locale;

public class TimeActivity extends AppCompatActivity {

    private TextView timer_textView;

    private static final long COUNTDOWN_IN_MILLIS = 300000; //5 minutes
    private ColorStateList defaultColorText;
    private CountDownTimer countDownTimer;
    private long timeLeftInMillis;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_time);

        initView();
        clickListener();
        startQuiz();
    }

    private void startQuiz() {
        timeLeftInMillis = COUNTDOWN_IN_MILLIS;
        startCountDown();
    }

    private void startCountDown() {
        countDownTimer = new CountDownTimer(timeLeftInMillis, 1000) {
            @Override
            public void onTick(long millisUntilFinished) {
                timeLeftInMillis = millisUntilFinished;
                updateCountDownText();
            }

            @Override
            public void onFinish() {
                timeLeftInMillis = 0;
                updateCountDownText();
            }
        }.start();
    }

    private void updateCountDownText() {
        int minutes = (int) (timeLeftInMillis / 1000) / 60;
        int seconds = (int) (timeLeftInMillis / 1000) % 60;

        String timeFormatted = String.format(Locale.getDefault(), "%02d:%02d", minutes, seconds);
        timer_textView.setText(timeFormatted);

        if(timeLeftInMillis < 60000){
            timer_textView.setTextColor(Integer.parseInt("#FA3333"));
        }else {
            timer_textView.setTextColor(defaultColorText);
        }
    }

    private void clickListener() {

    }

    private void initView() {
        timer_textView = findViewById(R.id.time_timer_textView);
        defaultColorText = timer_textView.getTextColors();
    }

    @Override
    protected void onDestroy() {
        super.onDestroy();
        if(countDownTimer != null){
            countDownTimer.cancel();
        }
    }
}