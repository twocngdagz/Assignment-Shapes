<?php

include_once('config/global.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Calculator.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Square.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Circle.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Cube.php');
include_once('libs/shape-calculator/src/ShapeCalculator/Sphere.php');

// The calculator
$calculator = new \Libraries\ShapeCalculator\Calculator;

// Define our shapes
$square = new \Libraries\ShapeCalculator\Square(25);
$cube = new \Libraries\ShapeCalculator\Cube(33);
$circle = new \Libraries\ShapeCalculator\Circle(90);
$sphere = new \Libraries\ShapeCalculator\Sphere(18);

$shapes = [ $square, $cube, $circle, $sphere ];
$area = $calculator->surfaceArea($shapes);
$volume = $calculator->totalVolume($shapes);

// Output the total surface area of the shapes
echo "The total surface area is $area\n";

// Output the total volume of the shapes
echo "The total volume is $volume\n";
