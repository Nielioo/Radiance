package com.radiance.radiance.model.dialogue;

public class Stage1Level1 {
    private int id;
    private String name;
    private String text;
    private int nextDialogueId;

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getText() {
        return text;
    }

    public void setText(String text) {
        this.text = text;
    }

    public int getNextDialogueId() {
        return nextDialogueId;
    }

    public void setNextDialogueId(int nextDialogueId) {
        this.nextDialogueId = nextDialogueId;
    }
}
