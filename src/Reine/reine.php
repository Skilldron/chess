<?php

class Reine extends Piece implements PossibleMovementInterface
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

        $tour = new Tour("Tour", $this->position, $this->type);
        $fou = new Fou("Fou", $this->position, $this->type);

        return array_merge($tour->getPossibleMovement($gridSize), $fou->getPossibleMovement($gridSize));
    }
}
