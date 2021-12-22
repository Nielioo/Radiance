package com.radiance.radiance.retrofit;

import com.radiance.radiance.model.RegisterResponse;
import com.radiance.radiance.model.TokenResponse;

import java.util.Date;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

public interface ApiEndPoints {
    @POST("login")
    @FormUrlEncoded
    Call<TokenResponse> login(@Field("email") String email,
                              @Field("password") String password);

    @POST("register")
    @FormUrlEncoded
    Call<RegisterResponse> register(@Field("name") String name,
                                    @Field("username") String username,
                                    @Field("email") String email,
                                    @Field("password") String password,
                                    @Field("password_confirmation") String password_confirmation,
                                    @Field("school") String school,
                                    @Field("city") String city,
                                    @Field("birthyear") String birthyear);

}
