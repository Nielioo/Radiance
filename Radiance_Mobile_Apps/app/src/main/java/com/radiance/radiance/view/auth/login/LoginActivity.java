package com.radiance.radiance.view.auth.login;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.ViewModelProvider;

import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.material.textfield.TextInputLayout;
import com.radiance.radiance.R;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.view.auth.register.RegisterActivity;
import com.radiance.radiance.view.auth.register.RegisterViewModel;
import com.radiance.radiance.view.home.HomeActivity;

public class LoginActivity extends AppCompatActivity {

    private TextView login_register_textView;
    private TextInputLayout login_email_textInputLayout,login_password_textInputLayout;
    private Button login_button;
    private LoginViewModel loginViewModel;
    private SharedPreferenceHelper helper;
    private Intent intent;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN,WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_login);

        initialize();
        setListener();
    }

    private void setListener() {
        login_button.setOnClickListener(view -> {
            Log.e("message", "into login");
            if (!login_email_textInputLayout.getEditText().getText().toString().isEmpty()
                    && !login_password_textInputLayout.getEditText().getText().toString().isEmpty()) {
                String email = login_email_textInputLayout.getEditText().getText().toString().trim();
                String password = login_password_textInputLayout.getEditText().getText().toString().trim();

                Log.e("message", "check data");
                loginViewModel.login(email, password).observe(this, tokenResponse -> {
                    if (tokenResponse != null) {
                        Log.e("message", "success");
                        helper.saveAccessToken(tokenResponse.getAuthorization());
                        intent = new Intent(LoginActivity.this, HomeActivity.class);
                        Toast.makeText(getBaseContext(), "Login Success", Toast.LENGTH_SHORT).show();
                        startActivity(intent);
                    } else {
                        Log.e("message", "failed");
                        Toast.makeText(getBaseContext(), "Login Failed", Toast.LENGTH_SHORT).show();
                    }
                });
            } else {
                Toast.makeText(getBaseContext(), "Insert Email and Password", Toast.LENGTH_SHORT).show();
            }
        });
    }

    private void initialize() {
        login_email_textInputLayout = findViewById(R.id.login_email_textInputLayout);
        login_password_textInputLayout = findViewById(R.id.login_password_textInputLayout);
        login_button = findViewById(R.id.login_button);
        login_register_textView = findViewById(R.id.login_register_textView);

        loginViewModel = new ViewModelProvider(this).get(LoginViewModel.class);
        helper = SharedPreferenceHelper.getInstance(this);

        login_register_textView.setOnClickListener(view -> {
            intent = new Intent(getBaseContext(), RegisterActivity.class).setFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
            startActivity(intent);
        });
    }
}