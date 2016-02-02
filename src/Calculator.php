<?php

namespace Shapes;

class Calculator {

	/**
	 * Get the surface area covered by the shapes
	 *
	 * @param array $shape
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{
		$area = [];

		foreach ( $shapes as $shape ) {
			$area[] = $shape->area();
		}

		return array_sum($area);
	}

	/**
	 * Get the total volume occupied by the shapes
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{
		$area = [];

		foreach ( $shapes as $shape ) {
			if ( is_a($shape, '\Libraries\ShapeCalculator\ThreeDimensionalShapeInterface') ) {
				$area[] = $shape->volume();
			}
		}

		return array_sum($area);
	}

}
