package com.radiance.radiance.retrofit;

import com.radiance.radiance.model.Problem;
import com.radiance.radiance.model.RegisterResponse;
import com.radiance.radiance.model.Stage;
import com.radiance.radiance.model.Students;
import com.radiance.radiance.model.TimeChallenge;
import com.radiance.radiance.model.TimeChallengeHistory;
import com.radiance.radiance.model.TokenResponse;

import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.GET;
import retrofit2.http.POST;
import retrofit2.http.Path;
import retrofit2.http.Query;

public interface ApiEndPoints {
    // Start of authentication
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
    // End of authentication

    // Start of story mode
    @POST("storyHistory")
    Call<String> addStoryHistory(
            @Query("stage") String stage,
            @Query("level") String level,
            @Query("student_id") String studentId,
            @Query("level_id") String levelId,
            @Query("star") String star
    );

    @GET("stage/{stage}")
    Call<Stage> getStoryHistoryByStage(
            @Path("stage") String stage
    );
    // End of story mode

    // Start of problem
    @POST("problems")
    @FormUrlEncoded
    Call<Problem> getProblem(
            @Field("stage") String stage,
            @Field("level") String level
    );
    // End of problem

    // Start of time challenge
    @POST("timeChallenge")
    Call<ResponseBody> addTimeChallengeHistory(
            @Query("student_id") String studentId,
            @Query("score") String score
    );

    @POST("timeChallenge")
    Call<TimeChallenge> getRandomProblem();
    // End of time challenge
}