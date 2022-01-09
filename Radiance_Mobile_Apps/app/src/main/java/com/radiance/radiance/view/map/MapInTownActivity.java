package com.radiance.radiance.view.map;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.LinearLayout;

import com.radiance.radiance.R;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.view.gameMode.storyMode.StoryViewModel;
import com.radiance.radiance.view.startGame.QuestionActivity;
import com.radiance.radiance.view.startGame.StoryActivity;

import java.util.ArrayList;

public class MapInTownActivity extends AppCompatActivity {

    private ImageView level1_button, level2_button, level3_button, level4_button, level5_button,
            level6_button, level7_button, level8_button, level9_button, level10_button, backButton_imageView;

    private LinearLayout inTownMap_level1_linearLayout, inTownMap_level2_linearLayout,
            inTownMap_level3_linearLayout, inTownMap_level4_linearLayout,
            inTownMap_level5_linearLayout, inTownMap_level6_linearLayout,
            inTownMap_level7_linearLayout, inTownMap_level8_linearLayout,
            inTownMap_level9_linearLayout, inTownMap_level10_linearLayout;
    private ArrayList<ImageView> imageViews;
    private ArrayList<LinearLayout> linearLayouts;

    private SharedPreferenceHelper helper;
    private StoryViewModel storyViewModel;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_map_in_town);
        
        intView();
        setStage();
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

                Intent levelTwo = new Intent(MapInTownActivity.this, QuestionActivity.class);
                levelTwo.putExtras(bundle);
                startActivity(levelTwo);
            }
        });

        level3_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "3");

                Intent levelThree = new Intent(MapInTownActivity.this, QuestionActivity.class);
                levelThree.putExtras(bundle);
                startActivity(levelThree);
            }
        });

        level4_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "4");

                Intent levelFour = new Intent(MapInTownActivity.this, QuestionActivity.class);
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

                Intent levelSix = new Intent(MapInTownActivity.this, QuestionActivity.class);
                levelSix.putExtras(bundle);
                startActivity(levelSix);
            }
        });

        level7_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "7");

                Intent levelSeven = new Intent(MapInTownActivity.this, QuestionActivity.class);
                levelSeven.putExtras(bundle);
                startActivity(levelSeven);
            }
        });

        level8_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "8");

                Intent levelEight = new Intent(MapInTownActivity.this, QuestionActivity.class);
                levelEight.putExtras(bundle);
                startActivity(levelEight);
            }
        });

        level9_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "9");

                Intent levelNine = new Intent(MapInTownActivity.this, QuestionActivity.class);
                levelNine.putExtras(bundle);
                startActivity(levelNine);
            }
        });

        level10_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                bundle.putString("level", "10");

                Intent levelTen = new Intent(MapInTownActivity.this, QuestionActivity.class);
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

    private void setStage() {
        imageViews.add(level1_button);
        imageViews.add(level2_button);
        imageViews.add(level3_button);
        imageViews.add(level4_button);
        imageViews.add(level5_button);
        imageViews.add(level6_button);
        imageViews.add(level7_button);
        imageViews.add(level8_button);
        imageViews.add(level9_button);
        imageViews.add(level10_button);
        linearLayouts.add(inTownMap_level1_linearLayout);
        linearLayouts.add(inTownMap_level2_linearLayout);
        linearLayouts.add(inTownMap_level3_linearLayout);
        linearLayouts.add(inTownMap_level4_linearLayout);
        linearLayouts.add(inTownMap_level5_linearLayout);
        linearLayouts.add(inTownMap_level6_linearLayout);
        linearLayouts.add(inTownMap_level7_linearLayout);
        linearLayouts.add(inTownMap_level8_linearLayout);
        linearLayouts.add(inTownMap_level9_linearLayout);
        linearLayouts.add(inTownMap_level10_linearLayout);

        for (int i = 0; i < imageViews.size(); i++) {
            imageViews.get(i).setVisibility(View.INVISIBLE);
        }

        storyViewModel.init(helper.getAccessToken());
        storyViewModel.getResultStoryHistoryByStage(String.valueOf(3));
        storyViewModel.getResultStoryHistoryByStage().observe(this, stage -> {
            for (int i = 0; i < stage.getLevels().size(); i++) {
                imageViews.get(i).setVisibility(View.VISIBLE);
                for (int j = 0; j < stage.getLevels().get(i).getStar(); j++) {
                    // Set default star
                    ImageView imageView = new ImageView(this);
                    imageView.setImageResource(R.drawable.star_unobtain);

                    // If high score found
                    if (i + 1 == stage.getLevels().size() && stage.getHighestStars().size() != 10) {
                        imageView.setImageResource(R.drawable.star_unobtain);
                    } else {
                        // Set obtain star based on highest star
                        if (j < stage.getHighestStars().get(i)) {
                            imageView.setImageResource(R.drawable.star_obtain);
                        }
                    }

                    LinearLayout.LayoutParams layoutParams = new LinearLayout.LayoutParams(50, 50);
                    imageView.setLayoutParams(layoutParams);

                    linearLayouts.get(i).addView(imageView);
                }
            }
        });
    }

    private void intView() {
        imageViews = new ArrayList<>();
        linearLayouts = new ArrayList<>();
        helper = SharedPreferenceHelper.getInstance(this);

        //LEVEL BUTTON
        level1_button = findViewById(R.id.inTownMap_level1_button);
        level2_button = findViewById(R.id.inTownMap_level2_button);
        level3_button = findViewById(R.id.inTownMap_level3_button);
        level4_button = findViewById(R.id.inTownMap_level4_button);
        level5_button = findViewById(R.id.inTownMap_level5_button);
        level6_button = findViewById(R.id.inTownMap_level6_button);
        level7_button = findViewById(R.id.inTownMap_level7_button);
        level8_button = findViewById(R.id.inTownMap_level8_button);
        level9_button = findViewById(R.id.inTownMap_level9_button);
        level10_button = findViewById(R.id.inTownMap_level10_button);

        //BACK BUTTON
        backButton_imageView = findViewById(R.id.inTownMap_backButton_imageView);

        inTownMap_level1_linearLayout = findViewById(R.id.inTownMap_level1_linearLayout);
        inTownMap_level2_linearLayout = findViewById(R.id.inTownMap_level2_linearLayout);
        inTownMap_level3_linearLayout = findViewById(R.id.inTownMap_level3_linearLayout);
        inTownMap_level4_linearLayout = findViewById(R.id.inTownMap_level4_linearLayout);
        inTownMap_level5_linearLayout = findViewById(R.id.inTownMap_level5_linearLayout);
        inTownMap_level6_linearLayout = findViewById(R.id.inTownMap_level6_linearLayout);
        inTownMap_level7_linearLayout = findViewById(R.id.inTownMap_level7_linearLayout);
        inTownMap_level8_linearLayout = findViewById(R.id.inTownMap_level8_linearLayout);
        inTownMap_level9_linearLayout = findViewById(R.id.inTownMap_level9_linearLayout);
        inTownMap_level10_linearLayout = findViewById(R.id.inTownMap_level10_linearLayout);

        storyViewModel = new ViewModelProvider(this).get(StoryViewModel.class);
    }
}