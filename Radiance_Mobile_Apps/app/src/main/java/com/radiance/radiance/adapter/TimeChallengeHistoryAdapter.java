package com.radiance.radiance.adapter;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.radiance.radiance.R;
import com.radiance.radiance.model.TimeChallengeHistory;

import java.util.List;

public class TimeChallengeHistoryAdapter extends RecyclerView.Adapter<TimeChallengeHistoryAdapter.CardViewViewHolder> {

    private Context context;
    private List<TimeChallengeHistory.Leaderboard> listTimeChallengeHistory;
    private List<TimeChallengeHistory.Leaderboard> getListTimeChallengeHistory(){
        return listTimeChallengeHistory;
    }
    public void setListTimeChallengeHistory(List<TimeChallengeHistory.Leaderboard> listTimeChallengeHistory){
        this.listTimeChallengeHistory = listTimeChallengeHistory;
    }

    private List<String> listStudent;
    private List<String> getListStudent(){
        return listStudent;
    }
    public void setListStudent(List<String> listStudent){
        this.listStudent = listStudent;
    }

    public TimeChallengeHistoryAdapter(Context context){
        this.context = context;
    }

    @NonNull
    @Override
    public TimeChallengeHistoryAdapter.CardViewViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View view = LayoutInflater.from(parent.getContext()).
                inflate(R.layout.card_leaderboard, parent, false);
        return new TimeChallengeHistoryAdapter.CardViewViewHolder(view);
    }

    @Override
    public void onBindViewHolder(@NonNull TimeChallengeHistoryAdapter.CardViewViewHolder holder, int position) {
        final TimeChallengeHistory.Leaderboard leaderboard = getListTimeChallengeHistory().get(position);
        final String student = getListStudent().get(position);
        holder.leaderboard_name_textView.setText(String.valueOf(student));
        holder.leaderboard_score_textView.setText(String.valueOf(leaderboard.getScore()));
    }

    @Override
    public int getItemCount() {
        return getListTimeChallengeHistory().size();
    }

    public class CardViewViewHolder extends RecyclerView.ViewHolder {

        TextView leaderboard_name_textView;
        TextView leaderboard_score_textView;

        public CardViewViewHolder(@NonNull View itemView) {
            super(itemView);

            leaderboard_name_textView  = itemView.findViewById(R.id.leaderboard_name_textView);
            leaderboard_score_textView = itemView.findViewById(R.id.leaderboard_score_textView);
        }
    }
}
