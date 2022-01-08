package com.radiance.radiance.retrofit;

import com.radiance.radiance.helper.Const;
import com.radiance.radiance.model.Problem;
import com.radiance.radiance.model.RegisterResponse;
import com.radiance.radiance.model.Stage;
import com.radiance.radiance.model.TimeChallenge;
import com.radiance.radiance.model.TokenResponse;

import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class RetrofitService {
    public static final String TAG = "RetrofitService";
    private static RetrofitService service;
    private final ApiEndPoints api;

    public RetrofitService(String token) {
        OkHttpClient.Builder client = new OkHttpClient.Builder();

        if (token.equals("")) {
            client.addInterceptor(chain -> {
                Request request = chain.request().newBuilder()
                        .addHeader("Accept", "application/json")
                        .build();
                return chain.proceed(request);
            });
        } else {
            client.addInterceptor(chain -> {
                Request request = chain.request().newBuilder()
                        .addHeader("Accept", "application/json")
                        .addHeader("Authorization", token)
                        .build();
                return chain.proceed(request);
            });
        }

        api = new Retrofit.Builder()
                .baseUrl(Const.BASE_URL)
                .addConverterFactory(GsonConverterFactory.create())
                .client(client.build())
                .build().create(ApiEndPoints.class);
    }

    public static RetrofitService getInstance(String token) {
        if (service == null) {
            service = new RetrofitService(token);
        } else if (!token.equals("")) {
            service = new RetrofitService(token);
        }

        return service;
    }

    // Start of authentication
    public Call<TokenResponse> login(String email, String password) {
        return api.login(email, password);
    }

    public Call<RegisterResponse> register(String name, String username, String email, String password, String password_confirmation, String school, String city, String birthyear) {
        return api.register(name, username, email, password, password_confirmation, school, city, birthyear);
    }
    // End of authentication

    // Start of story mode
    public Call<String> addStoryHistory(String stage, String level, String studentId, String levelId, String star) {
        return api.addStoryHistory(stage, level, studentId, levelId, star);
    }

    public Call<Stage> getStoryHistoryByStage(String stage) {
        return api.getStoryHistoryByStage(stage);
    }
    // End of story mode

    // Start of problem
    public Call<Problem> getProblem(String stage, String level) {
        return api.getProblem(stage, level);
    }
    // End of problem

    // Start of time challenge
    public Call<ResponseBody> addTimeChallengeHistory(String studentId, String score) {
        return api.addTimeChallengeHistory(studentId, score);
    }

    public Call<TimeChallenge> getRandomProblem() {
        return api.getRandomProblem();
    }
    // End of time challenge
}
