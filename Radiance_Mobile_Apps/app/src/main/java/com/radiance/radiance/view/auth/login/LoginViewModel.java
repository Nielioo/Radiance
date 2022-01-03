package com.radiance.radiance.view.auth.login;

import android.app.Application;

import androidx.annotation.NonNull;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.TokenResponse;
import com.radiance.radiance.repository.AuthRepository;

public class LoginViewModel extends AndroidViewModel {
    private AuthRepository authRepository;
    private static final String TAG = "LoginViewModel";

    public LoginViewModel(@NonNull Application application) {
        super(application);
        authRepository = AuthRepository.getInstance();
    }

    public MutableLiveData<TokenResponse> login(String email, String password){
        return authRepository.login(email, password);
    }
}
