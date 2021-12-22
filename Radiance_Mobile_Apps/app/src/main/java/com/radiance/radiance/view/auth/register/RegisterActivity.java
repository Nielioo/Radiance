package com.radiance.radiance.view.auth.register;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;

import com.google.android.material.textfield.TextInputLayout;
import com.radiance.radiance.R;
import com.radiance.radiance.view.auth.login.LoginActivity;

import java.util.Date;

public class RegisterActivity extends AppCompatActivity {

    private TextInputLayout register_name_textInputLayout, register_username_textInputLayout, register_email_textInputLayout,
            register_password_textInputLayout, register_passwordConfirm_textInputLayout, register_school_textInputLayout,
            register_city_textInputLayout, register_birthdate_textInputLayout;
    private Button register_button;
    private TextView register_login_textView;
    private RegisterViewModel registerViewModel;
    private Intent intent;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_register);

        initialize();
        setListener();

    }

    private void setListener() {
        register_button.setOnClickListener(view -> {

            if (!register_name_textInputLayout.getEditText().getText().toString().isEmpty()
                    && !register_username_textInputLayout.getEditText().getText().toString().isEmpty()
                    && !register_email_textInputLayout.getEditText().getText().toString().isEmpty()
                    && !register_password_textInputLayout.getEditText().getText().toString().isEmpty()
                    && !register_passwordConfirm_textInputLayout.getEditText().getText().toString().isEmpty()
                    && !register_school_textInputLayout.getEditText().getText().toString().isEmpty()
                    && !register_city_textInputLayout.getEditText().getText().toString().isEmpty()
                    && !register_birthdate_textInputLayout.getEditText().getText().toString().isEmpty()) {

                String name = register_name_textInputLayout.getEditText().getText().toString().trim();
                String username = register_username_textInputLayout.getEditText().getText().toString().trim();
                String email = register_email_textInputLayout.getEditText().getText().toString().trim();
                String password = register_password_textInputLayout.getEditText().getText().toString().trim();
                String password_confirmation = register_passwordConfirm_textInputLayout.getEditText().getText().toString().trim();
                String school = register_school_textInputLayout.getEditText().getText().toString().trim();
                String city = register_city_textInputLayout.getEditText().getText().toString().trim();
                String birthyear = register_birthdate_textInputLayout.getEditText().getText().toString().trim();

                registerViewModel.register(name, username, email, password, password_confirmation, school, city, birthyear).observe(this,registerResponse -> {
                    if(registerResponse!=null){
                        intent = new Intent(getBaseContext(), LoginActivity.class).setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
                        Toast.makeText(getBaseContext(), "Register Success", Toast.LENGTH_SHORT).show();
                        startActivity(intent);
                    } else {
                        Toast.makeText(getBaseContext(), "Register Failed", Toast.LENGTH_SHORT).show();
                    }
                });

            } else {
                Toast.makeText(getBaseContext(), "All field must not empty", Toast.LENGTH_SHORT).show();
            }

        });
    }

    private void initialize() {
        register_name_textInputLayout = findViewById(R.id.register_name_textInputLayout);
        register_username_textInputLayout = findViewById(R.id.register_username_textInputLayout);
        register_email_textInputLayout = findViewById(R.id.register_email_textInputLayout);
        register_password_textInputLayout = findViewById(R.id.register_password_textInputLayout);
        register_passwordConfirm_textInputLayout = findViewById(R.id.register_passwordConfirm_textInputLayout);
        register_school_textInputLayout = findViewById(R.id.register_school_textInputLayout);
        register_city_textInputLayout = findViewById(R.id.register_city_textInputLayout);
        register_birthdate_textInputLayout = findViewById(R.id.register_birthdate_textInputLayout);
        register_button = findViewById(R.id.register_button);
        register_login_textView = findViewById(R.id.register_login_textView);

        registerViewModel = new ViewModelProvider(this).get(RegisterViewModel.class);

        register_login_textView.setOnClickListener(view -> {
            intent = new Intent(getBaseContext(), LoginActivity.class).setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
            startActivity(intent);
        });
    }
}