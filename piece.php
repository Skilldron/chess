<?php

enum TypePawn{
    case WHITE;
    case BLACK;
};

class Piece {
    protected string $name;
    protected Array $position;
    protected TypePawn $type;

    function __construct(string $name, Array $position, TypePawn $type) {
        $this->name = $name;
        $this->type = $type;
        $this->position = $position;
    }

    public function getPosition(){
        return $this->position;
    }
    public function setPosition($position){
        $this->position = $position;
    }
    public function getType(){
        return $this->type;
    }
    public function setType($type){
        $this->type = $type;
    }
    public function getPossibleMovement($grid){}

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function __toString(){
        return $this->name;
    }
}
