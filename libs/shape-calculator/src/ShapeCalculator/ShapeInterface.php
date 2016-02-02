<?php

namespace Libraries\ShapeCalculator;

interface ShapeInterface {

	/**
	 * Get the name of the shape
	 *
	 * @return string
	 */
	public function name();

	/**
	 * Get how many dimensions the shape has
	 *
	 * @return int
	 */
	public function dimensions();

	/**
	 * Get how many faces the shape has
	 *
	 * @return int
	 */
	public function faces();

	/**
	 * Get how many edges the shape has
	 *
	 * @return int
	 */
	public function edges();

	/**
	 * Get how many corners the shape has
	 *
	 * @return int
	 */
	public function corners();

	/**
	 * Get the area
	 *
	 * @return int
	 */
	public function area();

	/**
	 * Get the perimeter
	 *
	 * @return int
	 */
	public function perimeter();

}
