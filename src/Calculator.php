<?php

namespace Shapes;

class Calculator {

	/**
	 * Get the total surface area of all shapes
	 *
	 * @param array $shape
	 * @return int
	 */
	public function surfaceArea(array $shapes)
	{
		$surfaceArea = 0;
		foreach($shapes as $shape)
		{
			$surfaceArea += $shape->area();
		}
		return $surfaceArea;
	}

	/**
	 * Get the total volume of all shapes
	 * NOTE: Ignore any 2 dimensional shapes because 2D shapes don't have volume.
	 *
	 * @param array $shapes
	 */
	public function totalVolume(array $shapes)
	{
		$volume = 0;
		foreach($shapes as $shape)
		{
			$volume += $shape->volume();
		}
		return $volume;
	}

}
