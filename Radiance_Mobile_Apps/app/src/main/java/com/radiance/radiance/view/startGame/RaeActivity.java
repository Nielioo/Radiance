package com.radiance.radiance.view.startGame;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.content.res.Resources;
import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.TextView;

import com.google.gson.JsonObject;
import com.radiance.radiance.R;
import com.radiance.radiance.view.map.MapCityActivity;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.io.InputStream;
import java.util.ArrayList;

public class RaeActivity extends AppCompatActivity {

    private ImageView dialogBox_imageView;
    private TextView dialog_textView;
    ArrayList<String> text = new ArrayList<>();

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
        try {
            // get JSONObject from JSON file
            JSONObject obj = new JSONObject(loadJSONFromAsset());
            // fetch JSONArray named users
            JSONArray userArray = obj.getJSONArray("try");
            // implement for loop for getting users list data
            for (int i = 0; i < userArray.length(); i++) {
                // create a JSONObject for fetching single user data
                JSONObject dialogue = userArray.getJSONObject(i);
                // fetch email and name and store it in arraylist
                text.add(dialogue.getString("text")); }
        } catch(JSONException e){
            e.printStackTrace();
        }
    }

    private String loadJSONFromAsset() {
        String json = null;
        try {
            InputStream is = getAssets().open("try.json");

            int size = is.available();

            byte[] buffer = new byte[size];

            is.read(buffer);

            is.close();

            json = new String(buffer, "UTF-8");


        } catch (IOException ex) {
            ex.printStackTrace();
            return null;
        }
        return json;
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