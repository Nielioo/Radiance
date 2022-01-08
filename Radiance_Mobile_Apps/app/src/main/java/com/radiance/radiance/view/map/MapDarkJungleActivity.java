package com.radiance.radiance.view.map;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;

import com.radiance.radiance.R;
import com.radiance.radiance.view.startGame.QuestionActivity;
import com.radiance.radiance.view.startGame.StoryActivity;

public class MapDarkJungleActivity extends AppCompatActivity {

    private ImageView level1_button, level2_button, level3_button, level4_button, level5_button,
            level6_button, level7_button, level8_button, level9_button, level10_button,
            level1star1_imageView, level1star2_imageView, level1star3_imageView, level2star1_imageView,
            level2star2_imageView, level2star3_imageView, level3star1_imageView, level3star2_imageView,
            level3star3_imageView, level4star1_imageView, level4star2_imageView, level4star3_imageView,
            level5star1_imageView, level5star2_imageView, level5star3_imageView, level6star1_imageView,
            level6star2_imageView, level6star3_imageView, level7star1_imageView, level7star2_imageView,
            level7star3_imageView, level8star1_imageView, level8star2_imageView, level8star3_imageView,
            level9star1_imageView, level9star2_imageView, level9star3_imageView, level10star1_imageView,
            level10star2_imageView, level10star3_imageView, backButton_imageView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_map_dark_jungle);

        intView();
        setListener();
    }

    private void setListener() {
        Bundle bundle = new Bundle();
        bundle.putString("bgImage", "darkforest");
        bundle.putString("stage", "3");

        level1_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "1");

                Intent levelOne = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
                levelOne.putExtras(bundle);
                startActivity(levelOne);
            }
        });

        level2_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "2");

                Intent levelTwo = new Intent(MapDarkJungleActivity.this, QuestionActivity.class);
                levelTwo.putExtras(bundle);
                startActivity(levelTwo);
            }
        });

        level3_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "3");

                Intent levelThree = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
                levelThree.putExtras(bundle);
                startActivity(levelThree);
            }
        });

        level4_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "4");

                Intent levelFour = new Intent(MapDarkJungleActivity.this, QuestionActivity.class);
                levelFour.putExtras(bundle);
                startActivity(levelFour);
            }
        });

        level5_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "5");

                Intent levelFive = new Intent(MapDarkJungleActivity.this, QuestionActivity.class);
                levelFive.putExtras(bundle);
                startActivity(levelFive);
            }
        });

        level6_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "6");

                Intent levelSix = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
                levelSix.putExtras(bundle);
                startActivity(levelSix);
            }
        });

        level7_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "7");

                Intent levelSeven = new Intent(MapDarkJungleActivity.this, QuestionActivity.class);
                levelSeven.putExtras(bundle);
                startActivity(levelSeven);
            }
        });

        level8_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "8");

                Intent levelEight = new Intent(MapDarkJungleActivity.this, QuestionActivity.class);
                levelEight.putExtras(bundle);
                startActivity(levelEight);
            }
        });

        level9_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "9");

                Intent levelNine = new Intent(MapDarkJungleActivity.this, QuestionActivity.class);
                levelNine.putExtras(bundle);
                startActivity(levelNine);
            }
        });

        level10_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "10");

                Intent levelTen = new Intent(MapDarkJungleActivity.this, QuestionActivity.class);
                levelTen.putExtras(bundle);
                startActivity(levelTen);
            }
        });

        backButton_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }

    private void intView() {
        //LEVEL BUTTON
        level1_button = findViewById(R.id.darkJungleMap_level1_button);
        level2_button = findViewById(R.id.darkJungleMap_level2_button);
        level3_button = findViewById(R.id.darkJungleMap_level3_button);
        level4_button = findViewById(R.id.darkJungleMap_level4_button);
        level5_button = findViewById(R.id.darkJungleMap_level5_button);
        level6_button = findViewById(R.id.darkJungleMap_level6_button);
        level7_button = findViewById(R.id.darkJungleMap_level7_button);
        level8_button = findViewById(R.id.darkJungleMap_level8_button);
        level9_button = findViewById(R.id.darkJungleMap_level9_button);
        level10_button = findViewById(R.id.darkJungleMap_level10_button);

        //STAR ACHIEVEMENT
        level1star1_imageView = findViewById(R.id.darkJungleMap_level1star1_imageView);
        level1star2_imageView = findViewById(R.id.darkJungleMap_level1star2_imageView);
        level1star3_imageView = findViewById(R.id.darkJungleMap_level1star3_imageView);
        level2star1_imageView = findViewById(R.id.darkJungleMap_level2star1_imageView);
        level2star2_imageView = findViewById(R.id.darkJungleMap_level2star2_imageView);
        level2star3_imageView = findViewById(R.id.darkJungleMap_level2star3_imageView);
        level3star1_imageView = findViewById(R.id.darkJungleMap_level3star1_imageView);
        level3star2_imageView = findViewById(R.id.darkJungleMap_level3star2_imageView);
        level3star3_imageView = findViewById(R.id.darkJungleMap_level3star3_imageView);
        level4star1_imageView = findViewById(R.id.darkJungleMap_level4star1_imageView);
        level4star2_imageView = findViewById(R.id.darkJungleMap_level4star2_imageView);
        level4star3_imageView = findViewById(R.id.darkJungleMap_level4star3_imageView);
        level5star1_imageView = findViewById(R.id.darkJungleMap_level5star1_imageView);
        level5star2_imageView = findViewById(R.id.darkJungleMap_level5star2_imageView);
        level5star3_imageView = findViewById(R.id.darkJungleMap_level5star3_imageView);
        level6star1_imageView = findViewById(R.id.darkJungleMap_level6star1_imageView);
        level6star2_imageView = findViewById(R.id.darkJungleMap_level6star2_imageView);
        level6star3_imageView = findViewById(R.id.darkJungleMap_level6star3_imageView);
        level7star1_imageView = findViewById(R.id.darkJungleMap_level7star1_imageView);
        level7star2_imageView = findViewById(R.id.darkJungleMap_level7star2_imageView);
        level7star3_imageView = findViewById(R.id.darkJungleMap_level7star3_imageView);
        level8star1_imageView = findViewById(R.id.darkJungleMap_level8star1_imageView);
        level8star2_imageView = findViewById(R.id.darkJungleMap_level8star2_imageView);
        level8star3_imageView = findViewById(R.id.darkJungleMap_level8star3_imageView);
        level9star1_imageView = findViewById(R.id.darkJungleMap_level9star1_imageView);
        level9star2_imageView = findViewById(R.id.darkJungleMap_level9star2_imageView);
        level9star3_imageView = findViewById(R.id.darkJungleMap_level9star3_imageView);
        level10star1_imageView = findViewById(R.id.darkJungleMap_level10star1_imageView);
        level10star2_imageView = findViewById(R.id.darkJungleMap_level10star2_imageView);
        level10star3_imageView = findViewById(R.id.darkJungleMap_level10star3_imageView);

        //BACK BUTTON
        backButton_imageView = findViewById(R.id.darkJungleMap_backButton_imageView);
    }
}