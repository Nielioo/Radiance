package com.radiance.radiance.model;

import com.google.gson.Gson;

public class Students {

    private String username;
    private String name;
    private String email;
    private String school;
    private String city;

<<<<<<< Updated upstream
    public Students(String username, String name, String school, String city, String birthyear) {
||||||| constructed merge base
    public Students(String username, String name, String school, String city, String birthyear) {

=======
    public Students(String username, String name, String email, String school, String city, String birthyear) {

>>>>>>> Stashed changes
        this.username = username;
        this.name = name;
<<<<<<< Updated upstream
||||||| constructed merge base

=======
        this.email = email;
>>>>>>> Stashed changes
        this.school = school;
        this.city = city;
        this.birthyear = birthyear;
    }

<<<<<<< Updated upstream
    private String birthyear;

||||||| constructed merge base


=======

>>>>>>> Stashed changes
    public static Students objectFromData(String str) {

        return new Gson().fromJson(str, Students.class);
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getSchool() {
        return school;
    }

    public void setSchool(String school) {
        this.school = school;
    }

    public String getCity() {
        return city;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public String getBirthyear() {
        return birthyear;
    }

    public void setBirthyear(String birthyear) {
        this.birthyear = birthyear;
    }
}
