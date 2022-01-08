package com.radiance.radiance.model;

import com.google.gson.Gson;

import java.util.List;

public class TimeChallengeHistory {

    private List<TimeChallengeHistories> timeChallengeHistories;

    public static TimeChallengeHistory objectFromData(String str) {

        return new Gson().fromJson(str, TimeChallengeHistory.class);
    }

    public List<TimeChallengeHistories> getTimeChallengeHistories() {
        return timeChallengeHistories;
    }

    public void setTimeChallengeHistories(List<TimeChallengeHistories> timeChallengeHistories) {
        this.timeChallengeHistories = timeChallengeHistories;
    }

    public static class TimeChallengeHistories {
        private int id;
        private int student_id;
        private int score;
        private String created_at;
        private String updated_at;

        public static TimeChallengeHistories objectFromData(String str) {

            return new Gson().fromJson(str, TimeChallengeHistories.class);
        }

        public int getId() {
            return id;
        }

        public void setId(int id) {
            this.id = id;
        }

        public int getStudent_id() {
            return student_id;
        }

        public void setStudent_id(int student_id) {
            this.student_id = student_id;
        }

        public int getScore() {
            return score;
        }

        public void setScore(int score) {
            this.score = score;
        }

        public String getCreated_at() {
            return created_at;
        }

        public void setCreated_at(String created_at) {
            this.created_at = created_at;
        }

        public String getUpdated_at() {
            return updated_at;
        }

        public void setUpdated_at(String updated_at) {
            this.updated_at = updated_at;
        }
    }
}
