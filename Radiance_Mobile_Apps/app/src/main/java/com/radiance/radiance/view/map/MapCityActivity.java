package com.radiance.radiance.view.map;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;

import com.radiance.radiance.R;

public class MapCityActivity extends AppCompatActivity {

    private ImageView level1_button, level2_button, level3_button, level4_button, level5_button,
            level6_button, level7_button, level8_button, level9_button, level10_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_map_city);
        
        intView();
        setListener();
    }

    private void setListener() {
//        level1_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelOne = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelOne);
//            }
//        });
//
//        level2_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelTwo = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelTwo);
//            }
//        });
//
//        level3_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelThree = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelThree);
//            }
//        });
//
//        level4_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelFour = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelFour);
//            }
//        });
//
//        level5_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelFive = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelFive);
//            }
//        });
//
//        level6_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelSix = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelSix);
//            }
//        });
//
//        level7_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelSeven = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelSeven);
//            }
//        });
//
//        level8_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelEight = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelEight);
//            }
//        });
//
//        level9_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelNine = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelNine);
//            }
//        });
//
//        level10_button.setOnClickListener(new View.OnClickListener() {
//            @Override
//            public void onClick(View v) {
//                Intent levelTen = new Intent(MapCityActivity.this, ------.class);
//                startActivity(levelTen);
//            }
//        });
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