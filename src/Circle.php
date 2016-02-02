<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Circle implements ShapeInterface {

	private   $name       = 'circle';
	private   $dimensions = 2;
	private   $faces      = 1;
	private   $edges      = 1;
	private   $corners    = 0;
	protected $radius;

	/**
	 * Circle constructor.
	 *
	 * @param int radius
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
		return pi() * sqrt($this->radius);
	}

	/**
	 * Get the perimeter (aka the circumference)
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return 2 * pi() * $this->radius;
	}

}
