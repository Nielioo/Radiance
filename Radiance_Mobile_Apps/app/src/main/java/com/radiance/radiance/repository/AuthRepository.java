package com.radiance.radiance.repository;

import android.util.Log;

import androidx.lifecycle.LiveData;
import androidx.lifecycle.MutableLiveData;

import com.google.gson.Gson;
import com.google.gson.JsonObject;
import com.radiance.radiance.model.RegisterResponse;
import com.radiance.radiance.model.TokenResponse;
import com.radiance.radiance.retrofit.RetrofitService;

import org.json.JSONException;
import org.json.JSONObject;

import java.util.Date;

import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class AuthRepository {
    private static final String TAG = "AuthRepository";
    private static AuthRepository authRepository;
    private RetrofitService apiService;

    private AuthRepository() {
        apiService = RetrofitService.getInstance("");
    }

    public static AuthRepository getInstance() {
        if (authRepository == null) {
            authRepository = new AuthRepository();
        }
        return authRepository;
    }

    public synchronized void resetInstance() {
        if (authRepository != null) {
            authRepository = null;
        }
    }

    public MutableLiveData<TokenResponse> login(String email, String password) {
        MutableLiveData<TokenResponse> tokenResponse = new MutableLiveData<>();

        apiService.login(email, password).enqueue(new Callback<TokenResponse>() {
            @Override
            public void onResponse(Call<TokenResponse> call, Response<TokenResponse> response) {
                if (response.isSuccessful()) {
                    Log.d(TAG, "onResponse: " + response.code());

                    if(response.code()==200){
                        if(response.body() != null){
                            Log.d(TAG, "onResponse: "+ response.body().getAccess_token());
                            tokenResponse.postValue(response.body());
                        }
                    }

                } else {
                    Log.d(TAG, "onResponse: " + response.code());
                }
            }

            @Override
            public void onFailure(Call<TokenResponse> call, Throwable t) {
                Log.e(TAG,"onFailure: "+t.getMessage());
            }
        });

        return tokenResponse;
    }

    public MutableLiveData<RegisterResponse> register(String name, String username, String email, String password, String password_confirmation, String school, String city, String birthyear){
        MutableLiveData<RegisterResponse> registerResponse = new MutableLiveData<>();
        apiService.register(name, username, email, password, password_confirmation, school, city, birthyear).enqueue(new Callback<RegisterResponse>() {
            @Override
            public void onResponse(Call<RegisterResponse> call, Response<RegisterResponse> response) {
                if (response.isSuccessful()) {
                    Log.d(TAG, "onResponse: " + response.code());

                    if(response.code()==200){
                        if(response.body() != null){
                            Log.d(TAG, "onResponse: "+ response.body());
                            registerResponse.postValue(response.body());
                        }
                    }

                } else {
                    Log.d(TAG, "onResponse: " + response.code());
                }
            }

            @Override
            public void onFailure(Call<RegisterResponse> call, Throwable t) {
                Log.e(TAG,"onFailure: "+t.getMessage());
            }
        });

        return registerResponse;
    }

    public LiveData<String> logout() {
        MutableLiveData<String> message = new MutableLiveData<>();

        apiService.logout().enqueue(new Callback<JsonObject>() {
            @Override
            public void onResponse(Call<JsonObject> call, Response<JsonObject> response) {
                Log.d(TAG, "onResponse: " + response.code());

                if (response.isSuccessful()) {
                    if (response.body() != null) {
                        try {
                            JSONObject object = new JSONObject(new Gson().toJson(response.body()));
                            String msg = object.getString("message");
                            Log.d(TAG, "onResponse: " + msg);
                            message.postValue(msg);
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                }
            }

            @Override
            public void onFailure(Call<JsonObject> call, Throwable t) {
                Log.e(TAG, "onFailure: " + t.getMessage());
            }
        });

        return message;
    }
}
