<?php 

namespace App\Classes;

/**
 * A circle with a radius and center point
 */
class Circle {
	private $point;
	private $radius;

	function __construct($point, $radius) {
    $this->point = $point;
    $this->radius = $radius;
  }

	/**
	 * get the circle's center.
	 * 
	 * @return Point
	 */
	public function getPoint() {
		return $this->point;
	}

	/**
	 * get the radius of the circle.
	 * 
	 * @return int
	 */
	public function getRadius() {
		return $this->radius;
	}

	/**
	 * Does a circle intersect another circle?
	 * 
	 * @return bool
	 */
	public function intersect($circle){
		$circle_radius = $circle->getRadius();
		$circle_point = $circle->getPoint();
		$circle_point_x = $circle_point->getX();
		$circle_point_y = $circle_point->getY();

		$x = $this->point->getX();
		$y = $this->point->getY();

		$center_distance = sqrt( pow($x-$circle_point_x, 2) + pow($y-$circle_point_y ,2) );
		return $center_distance > ($circle_radius + $this->radius);
  }
}

?>