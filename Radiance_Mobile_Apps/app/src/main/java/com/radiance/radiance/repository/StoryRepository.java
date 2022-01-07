package com.radiance.radiance.repository;

import android.util.Log;

import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Stage;
import com.radiance.radiance.retrofit.RetrofitService;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class StoryRepository {
    private static final String TAG = "StoryRepository";
    private static StoryRepository storyRepository;
    private RetrofitService apiService;

    private StoryRepository(String token) {
        Log.d(TAG, "token: " + token);
        apiService = RetrofitService.getInstance(token);
    }

    public static StoryRepository getInstance(String token) {
        if (storyRepository == null) {
            storyRepository = new StoryRepository(token);
        }
        return storyRepository;
    }

    public synchronized void resetInstance() {
        if (storyRepository != null) {
            storyRepository = null;
        } else {
            storyRepository = null;
        }
    }

    public MutableLiveData<String> addStoryHistory(String stage, String level, String studentId, String levelId, String star) {
        final MutableLiveData<String> storyHistory = new MutableLiveData<>();

        apiService.addStoryHistory(stage, level, studentId, levelId, star).enqueue(new Callback<String>() {
            @Override
            public void onResponse(Call<String> call, Response<String> response) {
                Log.d(TAG, "onResponse: " + response.code());

                if (response.isSuccessful()) {
                    if (response.body() != null) {
                        Log.d(TAG, "onResponse: SUCCESS");
                        storyHistory.postValue("SUCCESS");
                    }
                }
            }

            @Override
            public void onFailure(Call<String> call, Throwable t) {
                Log.e(TAG, "onFailure: ", t);
            }
        });

        return storyHistory;
    }

    public MutableLiveData<Stage> getStoryHistoryByStage(String stage) {
        final MutableLiveData<Stage> stageList = new MutableLiveData<>();

        apiService.getStoryHistoryByStage(stage).enqueue(new Callback<Stage>() {
            @Override
            public void onResponse(Call<Stage> call, Response<Stage> response) {
                Log.d(TAG, "onResponse: " + response.code());

                if (response.isSuccessful()) {
                    if (response.body() != null) {
                        Log.d(TAG, "onResponse: " + response.body());
                        stageList.postValue(response.body());
                    }
                }
            }

            @Override
            public void onFailure(Call<Stage> call, Throwable t) {
                Log.e(TAG, "onFailure: " + t.getMessage());
            }
        });

        return stageList;
    }
}
