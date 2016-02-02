<?php

include_once('config/global.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Calculator.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Square.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Cube.php');

// Define our shapes
$square = new \Libraries\ShapeCalculator\Square(25);
$cube = new \Libraries\ShapeCalculator\Cube(33);

$surface = $_GET['surface'];
$shapes = [ $square, $cube ];
$calculator = new \Libraries\ShapeCalculator\Calculator;

// Get the surface area covered by the shapes
$area = $calculator->surfaceArea($shapes);
$volume = $calculator->totalVolume($shapes);

echo "The surface area covered is $area\n";
echo "The total volume is $volume\n";
