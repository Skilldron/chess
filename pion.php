<?php


class Pion extends Piece{
    public function __construct($name,$position,$type)
    {
        parent::__construct($name,$position,$type);
    }

    public function getPossibleMovement($grid){
        $possibleMovement = array();
        if($this->type == TypePawn::WHITE){
            array_push($possibleMovement,array($this->position[0] - 1, $this->position[1]));
            array_push($possibleMovement,array($this->position[0] - 2, $this->position[1]));
        }else{
            array_push($possibleMovement,array($this->position[0]  + 1, $this->position[1]));
            array_push($possibleMovement,array($this->position[0]  + 2, $this->position[1]));
        }
        return $possibleMovement;
    }
};
