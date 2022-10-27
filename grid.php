<?php

include('piece.php');
include('pion.php');
include('tour.php');
include('fou.php');
include('cavalier.php');
include('reine.php');
include('roi.php');

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
                    echo "X";
                }else{
                    if(in_array(array($i,$j),$pieceMovement)){
                        echo "1";
                    }else{
                        echo "0";
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
$grid = new Grid(8);

$pion = new Pion("Pion",array(3, 4), TypePawn::WHITE);
$grid->setPiece($pion);
$grid->displayGrid();

echo "========================\n";

$tour = new Tour("Tour",array(4, 4), TypePawn::WHITE);
$grid->setPiece($tour);
$grid->displayGrid();

echo "========================\n";

$fou = new Fou("Fou",array(4, 4), TypePawn::WHITE);
$grid->setPiece($fou);
$grid->displayGrid();

echo "========================\n";

$cavalier = new Cavalier("Cavalier",array(1, 2), TypePawn::WHITE);
$grid->setPiece($cavalier);
$grid->displayGrid();

echo "========================\n";

$reine = new Reine("Reine",array(4, 4), TypePawn::WHITE);
$grid->setPiece($reine);
$grid->displayGrid();

echo "========================\n";

$roi = new Roi("Roi",array(4, 4), TypePawn::WHITE);
$grid->setPiece($roi);
$grid->displayGrid();
