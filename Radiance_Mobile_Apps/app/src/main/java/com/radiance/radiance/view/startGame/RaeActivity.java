package com.radiance.radiance.view.startGame;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.TextView;

import com.radiance.radiance.R;
import java.util.ArrayList;

public class RaeActivity extends AppCompatActivity {

    private ImageView dialogBox_imageView;
    private TextView dialog_textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_rae);
        
        initView();
        setListener();
        dialogue();
    }

    private void dialogue() {
    }

    private void setListener() {
        dialogBox_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Bundle bundle = getIntent().getExtras();
                String mDrawableName = bundle.getString("bgImage");
                Bundle setBackground = new Bundle();
                setBackground.putString("bgImage", String.valueOf(mDrawableName));
                Intent play = new Intent(RaeActivity.this, PlayActivity.class);
                play.putExtras(setBackground);
                startActivity(play);
            }
        });
    }

    private void initView() {
        dialogBox_imageView = findViewById(R.id.rae_dialogBox_imageView);
        dialog_textView = findViewById(R.id.rae_dialog_textView);
    }
}