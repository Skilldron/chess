<?php

class fou extends Piece{
    public function __construct($name,$position,$type)
    {
        parent::__construct($name,$position,$type);
    }

    public function getPossibleMovement($gridSize){
        $possibleMovement = array();
        $x = $this->position[0];
        $y = $this->position[1]; 
        $i = 0;
        $j = 0;
        while ($i < $gridSize && $j < $gridSize) {
            if ($i != $x && $j != $y) {
                $possibleMovement[] = array($i,$j);
            }
            $i++;
            $j++;
        }
        $i = 0;
        $j = $gridSize;
        while ($i < $gridSize && $j > 0) {
            if ($i != $x && $j != $y) {
                $possibleMovement[] = array($i,$j);
            }
            $i++;
            $j--;
        }
        return $possibleMovement; 
    }
};
