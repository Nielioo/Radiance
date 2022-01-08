package com.radiance.radiance.repository;

import android.util.Log;

import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.retrofit.RetrofitService;

import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class TimeChallengeRepository {
    private static final String TAG = "TimeChallengeRepository";
    private static TimeChallengeRepository timeChallengeRepository;
    private RetrofitService apiService;

    private TimeChallengeRepository(String token) {
        Log.d(TAG, "token: " + token);
        apiService = RetrofitService.getInstance(token);
    }

    public static TimeChallengeRepository getInstance(String token) {
        if (timeChallengeRepository == null) {
            timeChallengeRepository = new TimeChallengeRepository(token);
        }
        return timeChallengeRepository;
    }

    public synchronized void resetInstance() {
        if (timeChallengeRepository != null) {
            timeChallengeRepository = null;
        } else {
            timeChallengeRepository = null;
        }
    }

    public MutableLiveData<ResponseBody> addTimeChallengeHistory(String studentId, String score) {
        final MutableLiveData<ResponseBody> timeChallengeHistory = new MutableLiveData<>();

        apiService.addTimeChallengeHistory(studentId, score).enqueue(new Callback<ResponseBody>() {
            @Override
            public void onResponse(Call<ResponseBody> call, Response<ResponseBody> response) {
                Log.d(TAG, "onResponse: " + response.code());

                if (response.isSuccessful()) {
                    if (response.body() != null) {
                        Log.d(TAG, "onResponse: SUCCESS");
                        timeChallengeHistory.postValue(response.body());
                    }
                }
            }

            @Override
            public void onFailure(Call<ResponseBody> call, Throwable t) {
                Log.e(TAG, "onFailure: ", t);
            }
        });

        return timeChallengeHistory;
    }
}
