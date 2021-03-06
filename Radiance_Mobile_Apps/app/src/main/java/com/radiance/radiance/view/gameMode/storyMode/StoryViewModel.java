package com.radiance.radiance.view.gameMode.storyMode;

import android.app.Application;
import android.util.Log;

import androidx.annotation.NonNull;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.LiveData;
import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Problem;
import com.radiance.radiance.model.Stage;
import com.radiance.radiance.repository.StoryRepository;

public class StoryViewModel extends AndroidViewModel {
    private static final String TAG = "StoryViewModel";
    private StoryRepository storyRepository;
    private MutableLiveData<String> resultAddStoryHistory = new MutableLiveData<>();
    private MutableLiveData<Stage> resultGetStoryHistoryByStage = new MutableLiveData<>();

    public StoryViewModel(@NonNull Application application) {
        super(application);
    }

    public void init(String token) {
        Log.d(TAG, "token: " + token);
        storyRepository = StoryRepository.getInstance(token);
    }

    public void addStoryHistory(String stage, String level, String studentId, String levelId, String star) {
        resultAddStoryHistory = storyRepository.addStoryHistory(stage, level, studentId, levelId, star);
    }

    public void getResultStoryHistoryByStage(String stage) {
        resultGetStoryHistoryByStage = storyRepository.getStoryHistoryByStage(stage);
    }

    public LiveData<Stage> getResultStoryHistoryByStage() {
        return resultGetStoryHistoryByStage;
    }

}
