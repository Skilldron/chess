<?php

class Cavalier extends Piece implements PossibleMovementInterface
{

    public function __construct($name, $position, $type)
    {
        parent::__construct($name, $position, $type);
    }

    public function getPossibleMovement($gridSize)
    {
        $possibleMovement = array();
        $x = $this->position[0];
        $y = $this->position[1];

        if ($x - 2 >= 0 && $y - 1 >= 0) {
            $possibleMovement[] = array($x - 2, $y - 1);
        }
        if ($x - 2 >= 0 && $y + 1 < $gridSize) {
            $possibleMovement[] = array($x - 2, $y + 1);
        }
        if ($x - 1 >= 0 && $y - 2 >= 0) {
            $possibleMovement[] = array($x - 1, $y - 2);
        }
        if ($x - 1 >= 0 && $y + 2 < $gridSize) {
            $possibleMovement[] = array($x - 1, $y + 2);
        }
        if ($x + 1 < $gridSize && $y - 2 >= 0) {
            $possibleMovement[] = array($x + 1, $y - 2);
        }
        if ($x + 1 < $gridSize && $y + 2 < $gridSize) {
            $possibleMovement[] = array($x + 1, $y + 2);
        }
        if ($x + 2 < $gridSize && $y - 1 >= 0) {
            $possibleMovement[] = array($x + 2, $y - 1);
        }
        if ($x + 2 < $gridSize && $y + 1 < $gridSize) {
            $possibleMovement[] = array($x + 2, $y + 1);
        }
        return $possibleMovement;
    }
};
