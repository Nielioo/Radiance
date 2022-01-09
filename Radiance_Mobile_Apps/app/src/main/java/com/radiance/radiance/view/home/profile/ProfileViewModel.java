package com.radiance.radiance.view.home.profile;

import android.app.Application;
import android.util.Log;

import androidx.annotation.NonNull;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.LiveData;
import androidx.lifecycle.MutableLiveData;

import com.radiance.radiance.model.Problem;
import com.radiance.radiance.model.RegisterResponse;
import com.radiance.radiance.model.Students;
import com.radiance.radiance.repository.ProblemRepository;
import com.radiance.radiance.repository.StudentsRepository;


public class ProfileViewModel extends AndroidViewModel {
    private static final String TAG = "ProfileViewModel";
    private StudentsRepository studentsRepository;
    private MutableLiveData<Students> resultGetStudents = new MutableLiveData<>();
    private MutableLiveData<Students> resultSetStudents = new MutableLiveData<>();

    public ProfileViewModel(@NonNull Application application) {
        super(application);
    }

    public void init(String token) {
        Log.d(TAG, "token: " + token);
        studentsRepository = StudentsRepository.getInstance(token);
    }

    public void getStudents() {
        resultGetStudents = studentsRepository.getProfile();
    }


    public MutableLiveData<Students> SetStudents(String studentId, Students students) {
        return studentsRepository.setProfile(studentId, students);


    }

    public LiveData<Students> getResultStudents() {
        return resultGetStudents;
    }

    public LiveData<Students> setResultStudents() {
        return resultSetStudents;
    }

}

