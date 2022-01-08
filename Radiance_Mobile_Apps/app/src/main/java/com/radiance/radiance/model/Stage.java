package com.radiance.radiance.model;

import java.util.List;

public class Stage {
    private String theme;
    private List<Levels> levels;
    private List<Integer> highestStars;

    public String getTheme() {
        return theme;
    }

    public void setTheme(String theme) {
        this.theme = theme;
    }

    public List<Levels> getLevels() {
        return levels;
    }

    public void setLevels(List<Levels> levels) {
        this.levels = levels;
    }

    public List<Integer> getHighestStars() {
        return highestStars;
    }

    public void setHighestStars(List<Integer> highestStars) {
        this.highestStars = highestStars;
    }

    public static class Levels {
        private int id;
        private int stage_id;
        private Object level_requirement_id;
        private int level;
        private int star;
        private String type;
        private String created_at;
        private String updated_at;
        private List<GameStoryHistories> game_story_histories;

        public int getId() {
            return id;
        }

        public void setId(int id) {
            this.id = id;
        }

        public int getStage_id() {
            return stage_id;
        }

        public void setStage_id(int stage_id) {
            this.stage_id = stage_id;
        }

        public Object getLevel_requirement_id() {
            return level_requirement_id;
        }

        public void setLevel_requirement_id(Object level_requirement_id) {
            this.level_requirement_id = level_requirement_id;
        }

        public int getLevel() {
            return level;
        }

        public void setLevel(int level) {
            this.level = level;
        }

        public int getStar() {
            return star;
        }

        public void setStar(int star) {
            this.star = star;
        }

        public String getType() {
            return type;
        }

        public void setType(String type) {
            this.type = type;
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

        public List<GameStoryHistories> getGame_story_histories() {
            return game_story_histories;
        }

        public void setGame_story_histories(List<GameStoryHistories> game_story_histories) {
            this.game_story_histories = game_story_histories;
        }

        public static class GameStoryHistories {
            private int id;
            private int student_id;
            private int level_id;
            private int star;
            private String created_at;
            private String updated_at;

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

            public int getLevel_id() {
                return level_id;
            }

            public void setLevel_id(int level_id) {
                this.level_id = level_id;
            }

            public int getStar() {
                return star;
            }

            public void setStar(int star) {
                this.star = star;
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
}
