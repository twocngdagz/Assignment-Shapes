<?php

namespace Shapes;

include_once('ShapeInterface.php');

class Sphere implements ShapeInterface {

	protected $radius;

	/**
	 * Square constructor.
	 *
	 * @param int $side
	 */
	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area()
	{
		return 4 * pi() * (pow($this->radius,2));
	}

	/**
	 * Get the perimeter
	 *
	 * @return int
	 */
	public function perimeter()
	{
		return null;
	}

	/**
	 * Get the Volume
	 * @return int
	 */
	public function volume()
	{
		return (4/3) * pi() * (pow($this->radius, 3));
	}

}
