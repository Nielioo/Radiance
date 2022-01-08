package com.radiance.radiance.repository;

import android.util.Log;

import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Students;
import com.radiance.radiance.model.TimeChallengeHistory;
import com.radiance.radiance.retrofit.RetrofitService;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class TimeChallengeHistoryRepository {
    private static final String TAG = "TimeChallengeHistoryRep";
    private static TimeChallengeHistoryRepository timeChallengeHistoryRepository;
    private RetrofitService apiService;

    private TimeChallengeHistoryRepository(String token) {
        Log.d(TAG, "token: " + token);
        apiService = RetrofitService.getInstance(token);
    }

    public static TimeChallengeHistoryRepository getInstance(String token) {
        if (timeChallengeHistoryRepository == null) {
            timeChallengeHistoryRepository = new TimeChallengeHistoryRepository(token);
        }
        return timeChallengeHistoryRepository;
    }

    public synchronized void resetInstance() {
        if (timeChallengeHistoryRepository != null) {
            timeChallengeHistoryRepository = null;
        } else {
            timeChallengeHistoryRepository = null;
        }
    }

    public MutableLiveData<TimeChallengeHistory> getTimeChallengeHistory(){
        final MutableLiveData<TimeChallengeHistory> timeChallengeHistoryMutableLiveData = new MutableLiveData<>();

        apiService.getTimeChallengeHistory().enqueue(new Callback<TimeChallengeHistory>() {
            @Override
            public void onResponse(Call<TimeChallengeHistory> call, Response<TimeChallengeHistory> response) {
                Log.d(TAG, "onResponse: " + response.code());

                if (response.isSuccessful()) {
                    if (response.body() != null) {
                        Log.d(TAG, "onResponse: SUCCESS");
                        timeChallengeHistoryMutableLiveData.postValue(response.body());
                    }
                }
            }

            @Override
            public void onFailure(Call<TimeChallengeHistory> call, Throwable t) {
                Log.e(TAG, "onFailure: ", t);
            }
        });
        return timeChallengeHistoryMutableLiveData;
    }
}
