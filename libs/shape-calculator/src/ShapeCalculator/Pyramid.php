<?php

namespace Libraries\ShapeCalculator;

include_once('ShapeInterface.php');
include_once('ThreeDimensionalShapeInterface.php');

class Pyramid implements ShapeInterface, ThreeDimensionalShapeInterface {

	private   $name       = 'pyramid';
	private   $dimensions = 3;
	private   $faces      = 4;
	private   $edges      = 6;
	private   $corners    = 4;
	protected $baseLength;
	protected $baseWidth;
	protected $heigth;

	/**
	 * Cube constructor.
	 *
	 * @param int $side
	 */
	public function __construct($baseLength, $baseWidth, $height)
	{
		$this->baseLength = $baseLength;
		$this->baseWidth = $baseWidth;
		$this->heigth = $height;
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
		return 69;
	}

	/**
	 * Get the perimeter
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return 69;
	}

	/**
	 * Get the volume
	 *
	 * @return int
	 */
	public function volume()
	{
		return 69;
	}

}
