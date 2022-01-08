package com.radiance.radiance.view.map;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.LinearLayout;

import com.radiance.radiance.R;
<<<<<<< HEAD
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.view.gameMode.storyMode.StoryViewModel;
=======
>>>>>>> parent of d9ae65f (dialogue 45 percent T^T)
import com.radiance.radiance.view.startGame.StoryActivity;

import java.util.ArrayList;

public class MapDarkJungleActivity extends AppCompatActivity {

    private ImageView level1_button, level2_button, level3_button, level4_button, level5_button,
            level6_button, level7_button, level8_button, level9_button, level10_button, backButton_imageView;

    private LinearLayout darkJungleMap_level1_linearLayout, darkJungleMap_level2_linearLayout,
            darkJungleMap_level3_linearLayout, darkJungleMap_level4_linearLayout,
            darkJungleMap_level5_linearLayout, darkJungleMap_level6_linearLayout,
            darkJungleMap_level7_linearLayout, darkJungleMap_level8_linearLayout,
            darkJungleMap_level9_linearLayout, darkJungleMap_level10_linearLayout;
    private ArrayList<LinearLayout> linearLayouts;

    private SharedPreferenceHelper helper;
    private StoryViewModel storyViewModel;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_map_dark_jungle);

        intView();
        setStar();
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

                Intent levelTwo = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
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

                Intent levelFour = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
                levelFour.putExtras(bundle);
                startActivity(levelFour);
            }
        });

        level5_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "5");

                Intent levelFive = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
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

                Intent levelSeven = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
                levelSeven.putExtras(bundle);
                startActivity(levelSeven);
            }
        });

        level8_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "8");

                Intent levelEight = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
                levelEight.putExtras(bundle);
                startActivity(levelEight);
            }
        });

        level9_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "9");

                Intent levelNine = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
                levelNine.putExtras(bundle);
                startActivity(levelNine);
            }
        });

        level10_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "10");

                Intent levelTen = new Intent(MapDarkJungleActivity.this, StoryActivity.class);
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

    private void setStar() {
        linearLayouts.add(darkJungleMap_level1_linearLayout);
        linearLayouts.add(darkJungleMap_level2_linearLayout);
        linearLayouts.add(darkJungleMap_level3_linearLayout);
        linearLayouts.add(darkJungleMap_level4_linearLayout);
        linearLayouts.add(darkJungleMap_level5_linearLayout);
        linearLayouts.add(darkJungleMap_level6_linearLayout);
        linearLayouts.add(darkJungleMap_level7_linearLayout);
        linearLayouts.add(darkJungleMap_level8_linearLayout);
        linearLayouts.add(darkJungleMap_level9_linearLayout);
        linearLayouts.add(darkJungleMap_level10_linearLayout);

        storyViewModel.init(helper.getAccessToken());
        storyViewModel.getResultStoryHistoryByStage(String.valueOf(3));
        storyViewModel.getResultStoryHistoryByStage().observe(this, stage -> {
            for (int i = 0; i < stage.getLevels().size(); i++) {
                for (int j = 0; j < stage.getLevels().get(i).getStar(); j++) {
                    // Set default star
                    ImageView imageView = new ImageView(this);
                    imageView.setImageResource(R.drawable.star_unobtain);

                    // If high score found
                    if (i + 1 == stage.getLevels().size() && stage.getHighestStars().size() != 10) {
                        imageView.setImageResource(R.drawable.star_unobtain);
                        Log.e("unobtain", "setStar: ");
                    } else {
                        // Set obtain star based on highest star
                        if (j < stage.getHighestStars().get(i)) {
                            imageView.setImageResource(R.drawable.star_obtain);
                        }
                        Log.e("obtain", "setStar: ");
                    }

                    LinearLayout.LayoutParams layoutParams = new LinearLayout.LayoutParams(50, 50);
                    imageView.setLayoutParams(layoutParams);

                    linearLayouts.get(i).addView(imageView);
                }
            }
        });
    }

    private void intView() {
        linearLayouts = new ArrayList<>();
        helper = SharedPreferenceHelper.getInstance(this);

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

        //BACK BUTTON
        backButton_imageView = findViewById(R.id.darkJungleMap_backButton_imageView);

        darkJungleMap_level1_linearLayout = findViewById(R.id.darkJungleMap_level1_linearLayout);
        darkJungleMap_level2_linearLayout = findViewById(R.id.darkJungleMap_level2_linearLayout);
        darkJungleMap_level3_linearLayout = findViewById(R.id.darkJungleMap_level3_linearLayout);
        darkJungleMap_level4_linearLayout = findViewById(R.id.darkJungleMap_level4_linearLayout);
        darkJungleMap_level5_linearLayout = findViewById(R.id.darkJungleMap_level5_linearLayout);
        darkJungleMap_level6_linearLayout = findViewById(R.id.darkJungleMap_level6_linearLayout);
        darkJungleMap_level7_linearLayout = findViewById(R.id.darkJungleMap_level7_linearLayout);
        darkJungleMap_level8_linearLayout = findViewById(R.id.darkJungleMap_level8_linearLayout);
        darkJungleMap_level9_linearLayout = findViewById(R.id.darkJungleMap_level9_linearLayout);
        darkJungleMap_level10_linearLayout = findViewById(R.id.darkJungleMap_level10_linearLayout);

        storyViewModel = new ViewModelProvider(this).get(StoryViewModel.class);
    }
}