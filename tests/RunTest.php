<?php

include_once('config/global.php');
include_once('src/Calculator.php');
include_once('src/Square.php');
include_once('src/Circle.php');
include_once('src/Cube.php');
include_once('src/Sphere.php');


class RunTest extends\PHPUnit_Framework_TestCase {

	public function testCircleArea()
	{
		$circle = new Shapes\Circle(3);
		$this->assertEquals(28.274333882308, $circle->area());
	}

	public function testCirclePerimeter()
	{
		$circle = new Shapes\Circle(3);
		$this->assertEquals(18.849555921539, $circle->perimeter());
	}

	public function testSquareArea()
	{
		$square = new Shapes\Square(3);
		$this->assertEquals(9, $square->area());
	}

	public function testSquarePerimeter()
	{
		$square = new Shapes\Square(3);
		$this->assertEquals(12, $square->perimeter());
	}

	public function testCubeArea()
	{
		$cube = new Shapes\Cube(3);
		$this->assertEquals(54, $cube->area());
	}

	public function testCubeVolume()
	{
		$cube = new Shapes\Cube(3);
		$this->assertEquals(27, $cube->volume());
	}

	public function testSphereArea()
	{
		$sphere = new Shapes\Sphere(3);
		$this->assertEquals(113.09733552923, $sphere->area());
	}

	public function testSphereVolume()
	{
		$sphere = new Shapes\Sphere(3);
		$this->assertEquals(113.09733552923, $sphere->volume());
	}

	public function testTotalsurfaceArea()
	{
		$circle = new Shapes\Circle(3);
		$square = new Shapes\Square(3);
		$cube = new Shapes\Cube(3);
		$sphere = new Shapes\Sphere(3);
		$calculator = new Shapes\Calculator;
		$shapes = [$circle, $square, $cube, $sphere];
		$this->assertEquals(204.3716694115, $calculator->surfaceArea($shapes));
	}

	public function testTotalVolume()
	{
		$cube = new Shapes\Cube(3);
		$sphere = new Shapes\Sphere(3);
		$calculator = new Shapes\Calculator;
		$shapes = [$cube, $sphere];
		$this->assertEquals(140.09733552923, $calculator->totalVolume($shapes));
	}

}
