package com.radiance.radiance.model;

import com.google.gson.Gson;

import java.util.List;

public class Problem {

    private String stage;
    private String theme;
    private String level;
    private Problems problems;
    private List<?> answers;

    public static Problem objectFromData(String str) {

        return new Gson().fromJson(str, Problem.class);
    }

    public String getStage() {
        return stage;
    }

    public void setStage(String stage) {
        this.stage = stage;
    }

    public String getTheme() {
        return theme;
    }

    public void setTheme(String theme) {
        this.theme = theme;
    }

    public String getLevel() {
        return level;
    }

    public void setLevel(String level) {
        this.level = level;
    }

    public Problems getProblems() {
        return problems;
    }

    public void setProblems(Problems problems) {
        this.problems = problems;
    }

    public List<?> getAnswers() {
        return answers;
    }

    public void setAnswers(List<?> answers) {
        this.answers = answers;
    }

    public static class Problems {
        private int id;
        private String problem;
        private int level_id;
        private int topic_id;
        private String created_at;
        private String updated_at;
        private List<?> game_answers;

        public static Problems objectFromData(String str) {

            return new Gson().fromJson(str, Problems.class);
        }

        public int getId() {
            return id;
        }

        public void setId(int id) {
            this.id = id;
        }

        public String getProblem() {
            return problem;
        }

        public void setProblem(String problem) {
            this.problem = problem;
        }

        public int getLevel_id() {
            return level_id;
        }

        public void setLevel_id(int level_id) {
            this.level_id = level_id;
        }

        public int getTopic_id() {
            return topic_id;
        }

        public void setTopic_id(int topic_id) {
            this.topic_id = topic_id;
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

        public List<?> getGame_answers() {
            return game_answers;
        }

        public void setGame_answers(List<?> game_answers) {
            this.game_answers = game_answers;
        }
    }
}
