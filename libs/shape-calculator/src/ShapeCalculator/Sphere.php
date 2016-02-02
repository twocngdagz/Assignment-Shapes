<?php

namespace Libraries\ShapeCalculator;

include_once('ShapeInterface.php');
include_once('ThreeDimensionalShapeInterface.php');

class Sphere implements ShapeInterface, ThreeDimensionalShapeInterface {

	private   $name       = 'sphere';
	private   $dimensions = 3;
	private   $faces      = 0;
	private   $edges      = 0;
	private   $corners    = 0;
	protected $radius;

	/**
	 * Sphere constructor.
	 *
	 * @param int $radius
	 */
	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	/**
	 * Get the name of the shape
	 *
	 * @return string
	 */
	public function name()
	{
		return $this->name;
	}

	/**
	 * Get how many dimensions the shape has
	 *
	 * @return int
	 */
	public function dimensions()
	{
		return $this->dimensions;
	}

	/**
	 * Get how many faces the shape has
	 *
	 * @return int
	 */
	public function faces()
	{
		return $this->faces;
	}

	/**
	 * Get how many edges the shape has
	 *
	 * @return int
	 */
	public function edges()
	{
		return $this->edges;
	}

	/**
	 * Get how many corners the shape has
	 *
	 * @return int
	 */
	public function corners()
	{
		return $this->corners;
	}

	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area()
	{
		return 4 * pi() * sqrt($this->radius);
	}

	/**
	 * Get the perimeter (aka circumference)
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return 2 * pi() * $this->radius;
	}

	/**
	 * Get the volume
	 *
	 * @return int
	 */
	public function volume()
	{
		return ( 4 * pi() * pow($this->radius, 1 / 3) ) / 3;
	}

}
