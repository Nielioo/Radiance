package com.radiance.radiance.repository;

import android.util.Log;

import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Problem;
import com.radiance.radiance.model.TimeChallenge;
import com.radiance.radiance.retrofit.RetrofitService;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;

public class ProblemRepository {
    private static final String TAG = "ProblemRepository";
    private static ProblemRepository problemRepository;
    private RetrofitService apiService;

    private ProblemRepository(String token) {
        Log.d(TAG, "token: " + token);
        apiService = RetrofitService.getInstance(token);
    }

    public static ProblemRepository getInstance(String token) {
        if (problemRepository == null) {
            problemRepository = new ProblemRepository(token);
        }
        return problemRepository;
    }

    public synchronized void resetInstance() {
        if (problemRepository != null) {
            problemRepository = null;
        } else {
            problemRepository = null;
        }
    }

    public MutableLiveData<Problem> getProblem(String stage, String level) {
        final MutableLiveData<Problem> listProblems = new MutableLiveData<>();

        apiService.getProblem(stage, level).enqueue(new Callback<Problem>() {
            @Override
            public void onResponse(Call<Problem> call, Response<Problem> response) {
                Log.d(TAG, "onResponse: " + response.code());

                if (response.isSuccessful()) {
                    if (response.body() != null) {
                        Log.d(TAG, "onResponse: " + response.body());
                        listProblems.postValue(response.body());
                    }
                }
            }

            @Override
            public void onFailure(Call<Problem> call, Throwable t) {
                Log.e(TAG, "onFailure: " + t.getMessage());
            }
        });

        return listProblems;
    }

    public MutableLiveData<TimeChallenge> getRandomProblem() {
        final MutableLiveData<TimeChallenge> listProblems = new MutableLiveData<>();

        apiService.getRandomProblem().enqueue(new Callback<TimeChallenge>() {
            @Override
            public void onResponse(Call<TimeChallenge> call, Response<TimeChallenge> response) {
                Log.d(TAG, "onResponse: " + response.code());

                if (response.isSuccessful()) {
                    if (response.body() != null) {
                        Log.d(TAG, "onResponse: " + response.body());
                        listProblems.postValue(response.body());
                    }
                }
            }

            @Override
            public void onFailure(Call<TimeChallenge> call, Throwable t) {
                Log.e(TAG, "onFailure: " + t.getMessage());
            }
        });

        return listProblems;
    }
}
