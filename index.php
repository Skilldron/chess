<?php
include('./src/Interfaces/PossibleMovementInterface.php');
include('./src/Piece/piece.php');
include('./src/Pion/pion.php');
include('./src/Tour/tour.php');
include('./src/Fou/fou.php');
include('./src/Cavalier/cavalier.php');
include('./src/Reine/reine.php');
include('./src/Roi/roi.php');
include('./src/Grid/grid.php');

$grid = new Grid(8);

$pion = new Pion("Pion", array(3, 4), TypePawn::WHITE);
$grid->setPiece($pion);
$grid->displayGrid();

echo "========================\n";

$tour = new Tour("Tour", array(4, 4), TypePawn::WHITE);
$grid->setPiece($tour);
$grid->displayGrid();

echo "========================\n";

$fou = new Fou("Fou", array(4, 4), TypePawn::WHITE);
$grid->setPiece($fou);
$grid->displayGrid();

echo "========================\n";

$cavalier = new Cavalier("Cavalier", array(1, 2), TypePawn::WHITE);
$grid->setPiece($cavalier);
$grid->displayGrid();

echo "========================\n";

$reine = new Reine("Reine", array(4, 4), TypePawn::WHITE);
$grid->setPiece($reine);
$grid->displayGrid();

echo "========================\n";

$roi = new Roi("Roi", array(4, 4), TypePawn::WHITE);
$grid->setPiece($roi);
$grid->displayGrid();
