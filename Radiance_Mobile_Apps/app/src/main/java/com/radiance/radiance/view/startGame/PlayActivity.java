package com.radiance.radiance.view.startGame;

import androidx.appcompat.app.AppCompatActivity;

import android.content.res.Resources;
import android.os.Bundle;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;

import com.radiance.radiance.R;

public class PlayActivity extends AppCompatActivity {

    private ImageView bg_imageView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_play);

        initView();
    }

    private void initView() {
        bg_imageView = findViewById(R.id.play_background_imageView);

//        backgroundList.add(R.drawable.bridge);
//        backgroundList.add(R.drawable.forestbackground);
//        backgroundList.add(R.drawable.park);
//        backgroundList.add(R.drawable.resto);
//        backgroundList.add(R.drawable.underwater);

        Resources res = getResources();
        Bundle bundle = getIntent().getExtras();
        String mDrawableName = bundle.getString("bgImage");
        int resID = res.getIdentifier(mDrawableName , "drawable", getPackageName());
        bg_imageView.setImageResource(resID);
    }
}