package com.radiance.radiance.view.gameMode;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.widget.ImageView;

import com.radiance.radiance.R;

public class MapActivity extends AppCompatActivity {

    private ImageView level1_button, level2_button, level3_button, level4_button, level5_button,
                      level6_button, level7_button, level8_button, level9_button, level10_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_map);

        intView();
    }

    private void intView() {
        level1_button = findViewById(R.id.gameMap_level1_button);
        level2_button = findViewById(R.id.gameMap_level2_button);
        level3_button = findViewById(R.id.gameMap_level3_button);
        level4_button = findViewById(R.id.gameMap_level4_button);
        level5_button = findViewById(R.id.gameMap_level5_button);
        level6_button = findViewById(R.id.gameMap_level6_button);
        level7_button = findViewById(R.id.gameMap_level7_button);
        level8_button = findViewById(R.id.gameMap_level8_button);
        level9_button = findViewById(R.id.gameMap_level9_button);
        level10_button = findViewById(R.id.gameMap_level10_button);
    }
}