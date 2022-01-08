package com.radiance.radiance.view.home.profile;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;

import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.TextView;

import com.radiance.radiance.R;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.model.RegisterResponse;
import com.radiance.radiance.view.gameMode.storyMode.StoryViewModel;

public class ProfileActivity extends AppCompatActivity {

    private ImageView return_imageView;
    private TextView username_textView, name_textView, birthdate_textView, school_textView, city_textView;
    RegisterResponse registerResponse;

    private ProfileViewModel profileViewModel;
    private SharedPreferenceHelper helper;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_profile);

        initView();
        clickListener();
        setProfile();

    }

    private void setProfile(){
        profileViewModel.init(helper.getAccessToken());
        profileViewModel.getStudents();
        profileViewModel.getResultStudents().observe(this, students -> {
            username_textView.setText(students.getUsername());
            name_textView.setText(students.getName());
            birthdate_textView.setText(students.getBirthyear());
            school_textView.setText(students.getSchool());
            city_textView.setText(students.getCity());

        });

    }

    private void clickListener() {
        return_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }

    private void initView() {
        return_imageView = findViewById(R.id.profile_return_button);
        username_textView = findViewById(R.id.profile_username_textView);
        name_textView = findViewById(R.id.profile_name_textView);
        birthdate_textView = findViewById(R.id.profile_birthyear_textView);
        school_textView = findViewById(R.id.profile_school_textView);
        city_textView = findViewById(R.id.profile_city_textView);
        profileViewModel = new ViewModelProvider(this).get(ProfileViewModel.class);
        helper = SharedPreferenceHelper.getInstance(this);
    }
}