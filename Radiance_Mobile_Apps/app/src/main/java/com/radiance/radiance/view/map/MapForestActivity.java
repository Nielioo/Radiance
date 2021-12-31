package com.radiance.radiance.view.map;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;

import com.radiance.radiance.R;

public class MapForestActivity extends AppCompatActivity {

    private ImageView level1_button, level2_button, level3_button, level4_button, level5_button,
                      level6_button, level7_button, level8_button, level9_button, level10_button;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_map_forest);

        intView();
    }

    private void intView() {
        level1_button = findViewById(R.id.forestMap_level1_button);
        level2_button = findViewById(R.id.forestMap_level2_button);
        level3_button = findViewById(R.id.forestMap_level3_button);
        level4_button = findViewById(R.id.forestMap_level4_button);
        level5_button = findViewById(R.id.forestMap_level5_button);
        level6_button = findViewById(R.id.forestMap_level6_button);
        level7_button = findViewById(R.id.forestMap_level7_button);
        level8_button = findViewById(R.id.forestMap_level8_button);
        level9_button = findViewById(R.id.forestMap_level9_button);
        level10_button = findViewById(R.id.forestMap_level10_button);
    }
}