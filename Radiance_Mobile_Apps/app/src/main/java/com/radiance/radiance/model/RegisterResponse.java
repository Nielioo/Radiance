package com.radiance.radiance.model;

import com.google.gson.Gson;

public class RegisterResponse {

    private String name;
    private String username;
    private String email;
    private String password;
    private String password_confirmation;
    private String school;
    private String city;
    private String birthyear;

    public static RegisterResponse objectFromData(String str) {

        return new Gson().fromJson(str, RegisterResponse.class);
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getPassword_confirmation() {
        return password_confirmation;
    }

    public void setPassword_confirmation(String password_confirmation) {
        this.password_confirmation = password_confirmation;
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
