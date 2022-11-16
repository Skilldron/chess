<?php

enum TypePawn
{
    case WHITE;
    case BLACK;
};

class Piece
{
    protected string $name;
    protected array $position;
    protected TypePawn $type;

    function __construct(string $name, array $position, TypePawn $type)
    {
        $this->name = $name;
        $this->type = $type;
        $this->position = $position;
    }

    // Getters and setters
    public function getPosition()
    {
        return $this->position;
    }
    public function setPosition($position)
    {
        $this->position = $position;
    }
    public function getType()
    {
        return $this->type;
    }
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    // toString
    public function __toString()
    {
        return $this->name;
    }
}
