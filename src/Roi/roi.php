<?php

class Roi extends Piece implements PossibleMovementInterface
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

        // Check the left side (column) of the king
        if ($x - 1 >= 0) {
            $possibleMovement[] = array($x - 1, $y);
            if ($y - 1 >= 0) {
                $possibleMovement[] = array($x - 1, $y - 1);
            }
            if ($y + 1 < $gridSize) {
                $possibleMovement[] = array($x - 1, $y + 1);
            }
        }

        // Check above and below the king
        if ($y - 1 >= 0) {
            $possibleMovement[] = array($x, $y - 1);
        }
        if ($y + 1 < $gridSize) {
            $possibleMovement[] = array($x, $y + 1);
        }

        // Check the right side (column) of the king
        if ($x + 1 < $gridSize) {
            $possibleMovement[] = array($x + 1, $y);
            if ($y - 1 >= 0) {
                $possibleMovement[] = array($x + 1, $y - 1);
            }
            if ($y + 1 < $gridSize) {
                $possibleMovement[] = array($x + 1, $y + 1);
            }
        }
        return $possibleMovement;
    }
}
