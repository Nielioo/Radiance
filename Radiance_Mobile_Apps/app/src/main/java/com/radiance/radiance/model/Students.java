package com.radiance.radiance.model;


public class Students {

    private int student_id;
    private String username;
    private String name;
    private String email;
    private String school;
    private String city;
    private String birthyear;

    public Students(String username, String name, String email, String school, String city, String birthyear) {

        this.username = username;
        this.name = name;
        this.email = email;
        this.school = school;
        this.city = city;
        this.birthyear = birthyear;
    }

    public int getStudent_id() {
        return student_id;
    }

    public void setStudent_id(int student_id) {
        this.student_id = student_id;
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
