package com.radiance.radiance.view.gameMode.problem;

import android.app.Application;
import android.util.Log;

import androidx.annotation.NonNull;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.LiveData;
import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Problem;
import com.radiance.radiance.model.TimeChallenge;
import com.radiance.radiance.repository.ProblemRepository;

public class ProblemViewModel extends AndroidViewModel {
    private static final String TAG = "ProblemViewModel";
    private ProblemRepository problemRepository;
    private MutableLiveData<Problem> resultProblem = new MutableLiveData<>();
    private MutableLiveData<TimeChallenge> resultProblems = new MutableLiveData<>();

    public ProblemViewModel(@NonNull Application application) {
        super(application);
    }

    public void init(String token) {
        Log.d(TAG, "token: " + token);
        problemRepository = ProblemRepository.getInstance(token);
    }

    public void getProblem(String stage, String level) {
        resultProblem = problemRepository.getProblem(stage, level);
    }

    public LiveData<Problem> getResultProblem() {
        return resultProblem;
    }

    public void getRandomProblem() {
        resultProblems = problemRepository.getRandomProblem();
    }

    public LiveData<TimeChallenge> getResultRandomProblem() {
        return resultProblems;
    }
}
