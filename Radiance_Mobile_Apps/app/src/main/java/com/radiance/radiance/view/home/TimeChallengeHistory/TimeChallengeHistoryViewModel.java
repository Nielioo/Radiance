package com.radiance.radiance.view.home.TimeChallengeHistory;

import android.app.Application;
import android.util.Log;

import androidx.annotation.NonNull;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.LiveData;
import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Students;
import com.radiance.radiance.model.TimeChallengeHistory;
import com.radiance.radiance.repository.StudentsRepository;
import com.radiance.radiance.repository.TimeChallengeHistoryRepository;

public class TimeChallengeHistoryViewModel extends AndroidViewModel {
    private static final String TAG = "TimeChallengeHistoryRep";
    private TimeChallengeHistoryRepository timeChallengeHistoryRepository;
    private MutableLiveData<TimeChallengeHistory> resultTimeChallengeHistory = new MutableLiveData<>();

    public TimeChallengeHistoryViewModel(@NonNull Application application) {
        super(application);
    }

    public void init(String token) {
        Log.d(TAG, "token: " + token);
        timeChallengeHistoryRepository = TimeChallengeHistoryRepository.getInstance(token);
    }

    public void getTimeChallengeHistory() {
        resultTimeChallengeHistory = timeChallengeHistoryRepository.getTimeChallengeHistory();
    }

    public LiveData<TimeChallengeHistory> getResultTimeChallengeHistory() {
        return resultTimeChallengeHistory;
    }
}
