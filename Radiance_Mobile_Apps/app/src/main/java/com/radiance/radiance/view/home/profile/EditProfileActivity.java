package com.radiance.radiance.view.home.profile;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;

import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;

import com.google.android.material.textfield.TextInputLayout;
import com.radiance.radiance.R;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.model.Students;

public class EditProfileActivity extends AppCompatActivity {

    private TextInputLayout name_textInputLayout, username_textInputLayout, school_textInputLayout,
                            city_textInputLayout, birthdate_textInputLayout;
    private Button editProfile_button;

    private ProfileViewModel profileViewModel;
    private SharedPreferenceHelper helper;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_edit_profile);

        intView();
        setListener();
        showProfile();
    }

    private void showProfile() {
        profileViewModel.init(helper.getAccessToken());
        profileViewModel.getStudents();
        profileViewModel.getResultStudents().observe(this, students -> {
            username_textInputLayout.getEditText().setText(students.getUsername());
            name_textInputLayout.getEditText().setText(students.getName());
            birthdate_textInputLayout.getEditText().setText(students.getBirthyear());
            school_textInputLayout.getEditText().setText(students.getSchool());
            city_textInputLayout.getEditText().setText(students.getCity());
        });
    }

    private void setListener() {
        editProfile_button.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if(!name_textInputLayout.getEditText().getText().toString().isEmpty()
                        && !username_textInputLayout.getEditText().getText().toString().isEmpty()
                        && school_textInputLayout.getEditText().getText().toString().isEmpty()
                        && city_textInputLayout.getEditText().getText().toString().isEmpty()
                        && birthdate_textInputLayout.getEditText().getText().toString().isEmpty()){

                    String name = name_textInputLayout.getEditText().getText().toString().trim();
                    String username = username_textInputLayout.getEditText().getText().toString().trim();
                    String school = school_textInputLayout.getEditText().getText().toString().trim();
                    String city = city_textInputLayout.getEditText().getText().toString().trim();
                    String birthyear = birthdate_textInputLayout.getEditText().getText().toString().trim();

                    Students student = new Students( username, name, school, city, birthyear);


                    profileViewModel.init(helper.getAccessToken());
                    profileViewModel.getStudents();
                    profileViewModel.getResultStudents().observe(EditProfileActivity.this, students -> {
                        profileViewModel.SetStudents(String.valueOf(students.getStudent_id()), student);

                    });

                }
                finish();
            }
        });
    }

    private void intView() {
        name_textInputLayout = findViewById(R.id.editProfile_name_textInputLayout);
        username_textInputLayout = findViewById(R.id.editProfile_username_textInputLayout);
        school_textInputLayout = findViewById(R.id.editProfile_school_textInputLayout);
        city_textInputLayout = findViewById(R.id.editProfile_city_textInputLayout);
        birthdate_textInputLayout = findViewById(R.id.editProfile_birthdate_textInputLayout);
        editProfile_button = findViewById(R.id.editProfile_button);

        profileViewModel = new ViewModelProvider(this).get(ProfileViewModel.class);
        helper = SharedPreferenceHelper.getInstance(this);
    }
}