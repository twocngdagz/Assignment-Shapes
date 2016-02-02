<?php

namespace Libraries\ShapeCalculator;

include_once('ShapeInterface.php');

class Triangle implements ShapeInterface {

	private   $name       = 'triangle';
	private   $dimensions = 2;
	private   $faces      = 1;
	private   $edges      = 3;
	private   $corners    = 3;
	protected $a;
	protected $b;
	protected $c;

	/**
	 * Triangle constructor.
	 *
	 * @param int $a
	 * @param int $b
	 * @param int $c
	 */
	public function __construct($a, $b, $c)
	{
		$this->a = a;
		$this->b = b;
		$this->c = c;
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
		return $this->a + $this->b + $this->c;
	}

}
