package com.radiance.radiance.model;

import java.util.ArrayList;

public class Dialogues {
    ArrayList<String> stage1Level1 = new ArrayList<>();

    public Dialogues() {
        stage1Level1.add("Pemerintah telah memberikan izin untuk membangun pulau buatan tidak jauh dari kota. Untuk memudahkan akses ke pulau itu, gubernur memerintahkan untuk membangun jembatan gantung.");
        stage1Level1.add("Wihiii~");
        stage1Level1.add("Rae tidak sabar melihat tempatnya.");
        stage1Level1.add("Oh iya, tiap level yang kamu selesaikan akan membuat progress pembuatan jembatan bertambah. Semoga berhasil!");
        stage1Level1.add("Rae akan memberimu semangat! Go go yeay!");
        this.stage1Level1 = stage1Level1;
    }

    public ArrayList<String> getStage1Level1() {
        return stage1Level1;
    }

    public void setStage1Level1(ArrayList<String> stage1Level1) {
        this.stage1Level1 = stage1Level1;
    }
}
