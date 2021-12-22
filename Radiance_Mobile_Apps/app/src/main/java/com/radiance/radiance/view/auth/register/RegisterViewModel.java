package com.radiance.radiance.view.auth.register;

import android.app.Application;

import androidx.annotation.NonNull;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.RegisterResponse;
import com.radiance.radiance.repository.AuthRepository;

import java.util.Date;

public class RegisterViewModel extends AndroidViewModel {
    private AuthRepository authRepository;
    private static final String TAG = "RegisterViewModel";

    public RegisterViewModel(@NonNull Application application) {
        super(application);
        authRepository = AuthRepository.getInstance();
    }

    public MutableLiveData<RegisterResponse> register(String name, String username, String email, String password, String password_confirmation, String school, String city, String birthyear){
        return authRepository.register(name, username, email, password, password_confirmation, school, city, birthyear);
    }
}
