package com.radiance.radiance.view.map;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;

import com.radiance.radiance.R;
import com.radiance.radiance.view.startGame.StoryActivity;

public class MapInTownActivity extends AppCompatActivity {

    private ImageView level1_button, level2_button, level3_button, level4_button, level5_button,
            level6_button, level7_button, level8_button, level9_button, level10_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_map_in_town);
        
        intView();
        setListener();
    }

    private void setListener() {
        Bundle bundle = new Bundle();
        bundle.putString("bgImage", "intown");
        bundle.putString("stage", "7");
        
        level1_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "1");

                Intent levelOne = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelOne.putExtras(bundle);
                startActivity(levelOne);
            }
        });

        level2_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "2");

                Intent levelTwo = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelTwo.putExtras(bundle);
                startActivity(levelTwo);
            }
        });

        level3_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "3");

                Intent levelThree = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelThree.putExtras(bundle);
                startActivity(levelThree);
            }
        });

        level4_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "4");

                Intent levelFour = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelFour.putExtras(bundle);
                startActivity(levelFour);
            }
        });

        level5_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "5");

                Intent levelFive = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelFive.putExtras(bundle);
                startActivity(levelFive);
            }
        });

        level6_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "6");

                Intent levelSix = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelSix.putExtras(bundle);
                startActivity(levelSix);
            }
        });

        level7_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "7");

                Intent levelSeven = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelSeven.putExtras(bundle);
                startActivity(levelSeven);
            }
        });

        level8_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "8");

                Intent levelEight = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelEight.putExtras(bundle);
                startActivity(levelEight);
            }
        });

        level9_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "9");

                Intent levelNine = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelNine.putExtras(bundle);
                startActivity(levelNine);
            }
        });

        level10_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "10");

                Intent levelTen = new Intent(MapInTownActivity.this, StoryActivity.class);
                levelTen.putExtras(bundle);
                startActivity(levelTen);
            }
        });
    }

    private void intView() {
        level1_button = findViewById(R.id.cityMap_level1_button);
        level2_button = findViewById(R.id.cityMap_level2_button);
        level3_button = findViewById(R.id.cityMap_level3_button);
        level4_button = findViewById(R.id.cityMap_level4_button);
        level5_button = findViewById(R.id.cityMap_level5_button);
        level6_button = findViewById(R.id.cityMap_level6_button);
        level7_button = findViewById(R.id.cityMap_level7_button);
        level8_button = findViewById(R.id.cityMap_level8_button);
        level9_button = findViewById(R.id.cityMap_level9_button);
        level10_button = findViewById(R.id.cityMap_level10_button);
    }
}