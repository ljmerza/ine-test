<?php 

namespace App\Classes;

/**
 * A point with a x,y coordinate
 */
class Point{
	private $x;
	private $y;
	
	function __construct($x, $y) {
    $this->x = $x;
    $this->y = $y;
  }
  
  /**
	 * get the x position of the point.
	 * 
	 * @return int
	 */
	public function getX() {
		return $this->x;
	}

  /**
	 * get the y position of the point.
	 * 
	 * @return int
	 */
	public function getY() {
		return $this->y;
	}

  /**
	 * Is the point inside a given circle?
	 * 
	 * @return bool
	 */
	public function intersect($circle){
	  $circle_radius = $circle->getRadius();
	  $circle_point = $circle->getPoint();
	  $circle_point_x = $circle_point->getX();
	  $circle_point_y = $circle_point->getY();

		$left_equation = pow(abs($this->x - $circle_point_x), 2);
		$right_equation = pow(abs($this->y - $circle_point_y), 2);
	  return sqrt($left_equation + $right_equation) > $circle_radius;
  }
}

?>