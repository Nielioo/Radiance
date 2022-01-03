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
import com.radiance.radiance.model.Dialogues;

public class StoryActivity extends AppCompatActivity {

    private ImageView dialogBox_imageView;
    private TextView dialog_textView;
    private Dialogues model;

    private Bundle bundle;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_story);
        
        initView();
        setListener();

        model = new Dialogues();
        dialog_textView.setText(model.getStage1Level1().get(0));
        int i;
//        for(i=0; i< ArrayList.s)
    }

    private void setListener() {
        dialogBox_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String mDrawableName = bundle.getString("bgImage");
                Bundle setBackground = new Bundle();
                setBackground.putString("bgImage", String.valueOf(mDrawableName));
                Intent play = new Intent(StoryActivity.this, QuestionActivity.class);
                play.putExtras(setBackground);
                startActivity(play);
            }
        });
    }

    private void initView() {
        bundle = getIntent().getExtras();

        dialogBox_imageView = findViewById(R.id.rae_dialogBox_imageView);
        dialog_textView = findViewById(R.id.rae_dialog_textView);
    }
}