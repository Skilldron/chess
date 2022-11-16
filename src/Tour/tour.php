<?php

class Tour extends Piece{

    public function __construct($name,$position,$type)
    {
        parent::__construct($name,$position,$type);
    }


    public function getPossibleMovement($gridSize){
        $possibleMovement = array();
        $x = $this->position[0];
        $y = $this->position[1]; 
        
        for ($i=0; $i < $gridSize; $i++) { 
            if ($i != $x) {
                $possibleMovement[] = array($x,$i);
            }
        }
        for ($i=0; $i < $gridSize; $i++) { 
            if ($i != $x) {
                $possibleMovement[] = array($i,$y);
            }
        }
        return $possibleMovement; 
    }

};

