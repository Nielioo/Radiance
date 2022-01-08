package com.radiance.radiance.model;

import java.util.ArrayList;

public class Dialogues {
    ArrayList<String> stage1Level1 = new ArrayList<>();
    ArrayList<String> stage1Level5 = new ArrayList<>();

    public Dialogues() {
        //STAGE 1 LEVEL 1
        stage1Level1.add("Pemerintah telah memberikan izin untuk membangun pulau buatan tidak jauh dari kota. Untuk memudahkan akses ke pulau itu, gubernur memerintahkan untuk membangun jembatan gantung.");
        stage1Level1.add("Wihiii~");
        stage1Level1.add("Rae tidak sabar melihat tempatnya.");
        stage1Level1.add("Oh iya, tiap level yang kamu selesaikan akan membuat progress pembuatan jembatan bertambah. Semoga berhasil!");
        stage1Level1.add("Rae akan memberimu semangat! Go go yeay!");

        //STAGE 1 LEVEL 5
        stage1Level5.add("Sepertinya telah terjadi kesalahan teknis dalam proses pembangunan, oleh karena itu, kecepatanmu dalam menyelesaikan perkerjaan ini akan semakin lambat.");
        stage1Level5.add("Tidak ada hal yang bisa menghambatku");
        stage1Level5.add("Semua hambatan bisa kulalui bersamamu");
        stage1Level5.add("Yup, Rae yakin dengan kemampuanmu");
        stage1Level5.add("Tentu saja, Rae akan selalu mendukungmu!");

        this.stage1Level1 = stage1Level1;
        this.stage1Level5 = stage1Level5;
    }

    public ArrayList<String> getStage1Level5() {
        return stage1Level5;
    }

    public void setStage1Level5(ArrayList<String> stage1Level5) {
        this.stage1Level5 = stage1Level5;
    }

    public ArrayList<String> getStage1Level1() {
        return stage1Level1;
    }

    public void setStage1Level1(ArrayList<String> stage1Level1) {
        this.stage1Level1 = stage1Level1;
    }
}
