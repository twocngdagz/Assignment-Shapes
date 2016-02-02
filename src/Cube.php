<?php

namespace Shapes;

include_once('ShapeInterface.php');
include_once('ThreeDimensionalShapeInterface.php');

class Cube implements ShapeInterface, ThreeDimensionalShapeInterface {

	private   $name       = 'cube';
	private   $dimensions = 3;
	private   $faces      = 6;
	private   $edges      = 12;
	private   $corners    = 8;
	protected $side;

	/**
	 * Cube constructor.
	 *
	 * @param int $side
	 */
	public function __construct($side)
	{
		$this->side = $side;
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
		return sqrt($this->side) * 4;
	}

	/**
	 * Get the perimeter
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return 12 * $this->side;
	}

	/**
	 * Get the volume
	 *
	 * @return int
	 */
	public function volume()
	{
		return pow($this->side, 1 / 3);
	}

}
