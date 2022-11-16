<?php

class Grid{
    protected $grid;
    protected $size;
    protected $piece;

    public function __construct($size){
        $this->size = $size;
        $this->grid = array();
        for($i = 0; $i < $size; $i++){
            $this->grid[$i] = array();
            for($j = 0; $j < $size; $j++){
                $this->grid[$i][$j] = null;
            }
        }
        $this->piece = null;
    }

    public function setPiece($piece){
        $this->piece = $piece;
        $this->resetGrid();
        $this->placePiece();
    }

    public function getPiece(){
        return $this->piece;
    }

    public function placePiece(){
        if (!$this->piece){
            echo "Il n'y a pas de pion à placer";
            return;
        }
        $this->grid[$this->piece->getPosition()[0]][$this->piece->getPosition()[1]] = $this->piece;
    }

    public function resetGrid() {
        for($i = 0; $i < $this->size; $i++){
            for($j = 0; $j < $this->size; $j++){
                $this->grid[$i][$j] = null;
            }
        }
    }

    //display the grid
    public function displayGrid(){
        $pieceMovement = $this->piece->getPossibleMovement($this->getSize());
        echo "Déplacement possible pour la piece : ".$this->piece.PHP_EOL;
        for($i = 0; $i < $this->size; $i++){
            for($j = 0; $j < $this->size; $j++){
                if($this->grid[$i][$j] != null){
                    echo sprintf("%-2s", "♔ ");
                }else{
                    if(in_array(array($i,$j),$pieceMovement)){
                        echo sprintf("%-2d", "1");
                    }else{
                        echo sprintf("%-2d", "0");
                    }
                }
            }
            echo "\n";
        }
    }

    public function getGrid(){
        return $this->grid;
    }
    public function setGrid($grid){
        $this->grid = $grid;
    }

    public function getSize(){
        return $this->size;
    }
    public function setSize($size){
        $this->size = $size;
    }
}
