<?php

include_once('config/global.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Calculator.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Square.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Triangle.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Cube.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Pyramid.php');

// Define our shapes
$square = new \Libraries\ShapeCalculator\Square(25);
$triangle = new \Libraries\ShapeCalculator\Triangle(5, 8, 8);
$cube = new \Libraries\ShapeCalculator\Cube(33);
$pyramid = new \Libraries\ShapeCalculator\Pyramid(30, 25, 55);

$surface = $_GET['surface'];
$shapes = [ $square, $cube, $pyramid ];
$calculator = new \Libraries\ShapeCalculator\Calculator;

// Get the surface area covered by the shapes
$area = $calculator->surfaceArea($shapes);
$volume = $calculator->totalVolume($shapes);

echo "The surface area covered is $area\n";
echo "The total volume is $volume\n";
