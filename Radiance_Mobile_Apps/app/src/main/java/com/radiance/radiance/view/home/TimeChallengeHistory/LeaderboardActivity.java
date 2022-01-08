package com.radiance.radiance.view.home.TimeChallengeHistory;

import androidx.appcompat.app.AppCompatActivity;
import androidx.lifecycle.Observer;
import androidx.lifecycle.ViewModelProvider;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.view.View;
import android.view.Window;
import android.view.WindowManager;
import android.widget.ImageView;
import android.widget.Toast;

import com.radiance.radiance.R;
import com.radiance.radiance.adapter.TimeChallengeHistoryAdapter;
import com.radiance.radiance.helper.SharedPreferenceHelper;
import com.radiance.radiance.model.TimeChallengeHistory;
import com.radiance.radiance.view.home.profile.ProfileViewModel;

public class LeaderboardActivity extends AppCompatActivity {

    private ImageView return_imageView;

    private TimeChallengeHistoryViewModel viewModel;
    private SharedPreferenceHelper helper;

    private RecyclerView rv_leaderboard;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        requestWindowFeature(Window.FEATURE_NO_TITLE);
        getWindow().setFlags(WindowManager.LayoutParams.FLAG_FULLSCREEN, WindowManager.LayoutParams.FLAG_FULLSCREEN);
        setContentView(R.layout.activity_leaderboard);

        initView();
        clickListener();



    }



    private void clickListener() {
        return_imageView.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                finish();
            }
        });
    }

    private void initView() {
        return_imageView = findViewById(R.id.leaderboard_return_button);
        rv_leaderboard = findViewById(R.id.rv_leaderboard);
        viewModel = new ViewModelProvider(this).get(TimeChallengeHistoryViewModel.class);

        helper = SharedPreferenceHelper.getInstance(this);
        viewModel.init(helper.getAccessToken());
        viewModel.getTimeChallengeHistory();
        viewModel.getResultTimeChallengeHistory().observe(this, showTimeChallengeHistory);
    }

    private Observer<TimeChallengeHistory> showTimeChallengeHistory = new Observer<TimeChallengeHistory>() {
        @Override
        public void onChanged(TimeChallengeHistory timeChallengeHistory) {
            if (timeChallengeHistory != null){
                rv_leaderboard.setLayoutManager(new LinearLayoutManager(LeaderboardActivity.this));
                TimeChallengeHistoryAdapter adapter = new TimeChallengeHistoryAdapter(LeaderboardActivity.this);
                adapter.setListTimeChallengeHistory(timeChallengeHistory.getTimeChallengeHistories());
                rv_leaderboard.setAdapter(adapter);
            } else {
                Toast.makeText(getBaseContext(), "Empty Leaderboard", Toast.LENGTH_SHORT).show();
            }

        }
    };
}