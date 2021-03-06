package com.radiance.radiance.view.home.profile;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;

import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.util.Log;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.radiance.radiance.R;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.model.RegisterResponse;
import com.radiance.radiance.view.auth.login.LoginActivity;
import com.radiance.radiance.view.gameMode.storyMode.StoryViewModel;

public class ProfileActivity extends AppCompatActivity {

    private static final String TAG = "ProfileActivity";
    private ImageView return_imageView, edit_imageView, logout_imageView;
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

        edit_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent edit = new Intent(ProfileActivity.this, EditProfileActivity.class);
                startActivity(edit);
                finish();
            }
        });

        logout_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                Toast.makeText(ProfileActivity.this, "Please Click Again To Logout", Toast.LENGTH_SHORT).show();
                profileViewModel.initialize(helper.getAccessToken());
                profileViewModel.logout().observe(ProfileActivity.this, s -> {
                    if (!TextUtils.isEmpty(s)) {
                        helper.clearPref();
                        Intent intent = new Intent(ProfileActivity.this, LoginActivity.class);
                        intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_CLEAR_TASK);
                        startActivity(intent);
                    }
                });
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
        edit_imageView = findViewById(R.id.profile_edit_imageView);
        logout_imageView = findViewById(R.id.profile_logout_button);

        profileViewModel = new ViewModelProvider(this).get(ProfileViewModel.class);
        helper = SharedPreferenceHelper.getInstance(this);
    }
}