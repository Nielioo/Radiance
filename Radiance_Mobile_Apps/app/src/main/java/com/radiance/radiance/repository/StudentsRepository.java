package com.radiance.radiance.repository;

import android.util.Log;

import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Stage;
import com.radiance.radiance.model.Students;
import com.radiance.radiance.retrofit.RetrofitService;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class StudentsRepository {
    private static final String TAG = "StudentsRepository";
    private static StudentsRepository studentsRepository;
    private RetrofitService apiService;

    private StudentsRepository(String token) {
        Log.d(TAG, "token: " + token);
        apiService = RetrofitService.getInstance(token);
    }

    public static StudentsRepository getInstance(String token) {
        if (studentsRepository == null) {
            studentsRepository = new StudentsRepository(token);
        }
        return studentsRepository;
    }

    public synchronized void resetInstance() {
        if (studentsRepository != null) {
            studentsRepository = null;
        } else {
            studentsRepository = null;
        }
    }

    public MutableLiveData<Students> getProfile(){
        final MutableLiveData<Students> studentsMutableLiveData = new MutableLiveData<>();

        apiService.getProfile().enqueue(new Callback<Students>() {
            @Override
            public void onResponse(Call<Students> call, Response<Students> response) {
                Log.d(TAG, "onResponse: " + response.code());

                if (response.isSuccessful()) {
                    if (response.body() != null) {
                        Log.d(TAG, "onResponse: SUCCESS");
                        studentsMutableLiveData.postValue(response.body());
                    }
                }
            }

            @Override
            public void onFailure(Call<Students> call, Throwable t) {
                Log.e(TAG, "onFailure: ", t);
            }
        });
        return studentsMutableLiveData;
    }

//    public MutableLiveData<String> addStoryHistory(String stage, String level, String studentId, String levelId, String star) {
//        final MutableLiveData<String> storyHistory = new MutableLiveData<>();
//
//        apiService.addStoryHistory(stage, level, studentId, levelId, star).enqueue(new Callback<String>() {
//            @Override
//            public void onResponse(Call<String> call, Response<String> response) {
//                Log.d(TAG, "onResponse: " + response.code());
//
//                if (response.isSuccessful()) {
//                    if (response.body() != null) {
//                        Log.d(TAG, "onResponse: SUCCESS");
//                        storyHistory.postValue("SUCCESS");
//                    }
//                }
//            }
//
//            @Override
//            public void onFailure(Call<String> call, Throwable t) {
//                Log.e(TAG, "onFailure: ", t);
//            }
//        });
//
//        return storyHistory;
//    }

//    public MutableLiveData<Stage> getStoryHistoryByStage(String stage) {
//        final MutableLiveData<Stage> stageList = new MutableLiveData<>();
//
//        apiService.getStoryHistoryByStage(stage).enqueue(new Callback<Stage>() {
//            @Override
//            public void onResponse(Call<Stage> call, Response<Stage> response) {
//                Log.d(TAG, "onResponse: " + response.code());
//
//                if (response.isSuccessful()) {
//                    if (response.body() != null) {
//                        Log.d(TAG, "onResponse: " + response.body());
//                        stageList.postValue(response.body());
//                    }
//                }
//            }
//
//            @Override
//            public void onFailure(Call<Stage> call, Throwable t) {
//                Log.e(TAG, "onFailure: " + t.getMessage());
//            }
//        });
//
//        return stageList;
//    }
}
