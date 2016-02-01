<?php

namespace Libraries\ShapeCalculator;

include_once('ShapeInterface.php');

class Square implements ShapeInterface {

	private   $name       = 'square';
	private   $dimensions = 2;
	private   $faces      = 1;
	private   $edges      = 4;
	private   $corners    = 4;
	protected $side;

	/**
	 * Square constructor.
	 *
	 * @param int $side
	 */
	public function __construct($side)
	{
		$this->side = $side;
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
		return sqrt($this->side);
	}

	/**
	 * Get the perimeter
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return 4 * $this->side;
	}

}
