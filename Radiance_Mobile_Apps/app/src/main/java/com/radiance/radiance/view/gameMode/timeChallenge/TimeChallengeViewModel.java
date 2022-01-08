package com.radiance.radiance.view.gameMode.timeChallenge;

import android.app.Application;
import android.util.Log;

import androidx.annotation.NonNull;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Problem;
import com.radiance.radiance.model.TimeChallenge;
import com.radiance.radiance.repository.ProblemRepository;
import com.radiance.radiance.repository.TimeChallengeRepository;

import okhttp3.ResponseBody;

public class TimeChallengeViewModel extends AndroidViewModel {
    private static final String TAG = "TimeChallengeViewModel";
    private TimeChallengeRepository timeChallengeRepository;
    private MutableLiveData<ResponseBody> resultAddTimeChallengeHistory = new MutableLiveData<>();

    public TimeChallengeViewModel(@NonNull Application application) {
        super(application);
    }

    public void init(String token) {
        Log.d(TAG, "token: " + token);
        timeChallengeRepository = TimeChallengeRepository.getInstance(token);
    }

    public void addTimeChallengeHistory(String studentId, String score) {
        resultAddTimeChallengeHistory = timeChallengeRepository.addTimeChallengeHistory(studentId, score);
    }
}
