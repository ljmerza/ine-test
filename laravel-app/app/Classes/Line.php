<?php 

namespace App\Classes;

/**
 * A line with a start and end Point
 */
class Line {
	private $p1;
	private $p2;

  function __construct($p1, $p2) {
    $this->p1 = $p1;
    $this->p2 = $p2;
  }

  /**
	 * get the start point of the line.
   * 
	 * @return Point
	 */
  public function getPoint1() {
    return $this->p1;
  }

  /**
	 * get the end point of the line.
   * 
	 * @return Point
	 */
  public function getPoint2() {
    return $this->p2;
  }

  /**
	 * do two lines intersect?
   * 
	 * @return bool
	 */
  public function intersect($line){
    $p1 = $line->getPoint1();
    $p1_x = $p1->getX();
    $p1_y = $p1->getY();
    
    $p2 = $line->getPoint2();
    $p2_x = $p2->getX();
    $p2_y = $p2->getY();

    $a1 = $p2_y - $p1_y; 
    $b1 = $p1_x - $p2_x; 
    $c1 = $a1*$p1_x + $b1*$p1_y;


    $line_p1_x = $this->p1->getX();
    $line_p1_y = $this->p1->getY();
    $line_p2_x = $this->p2->getX();
    $line_p2_y = $this->p2->getY();

    $a2 = $line_p2_y - $line_p1_y; 
    $b2 = $line_p1_x - $line_p2_x; 
    $c2 = $a2*$line_p1_x + $b2*$line_p1_y; 


    $determinant = $a1*$b2 - $a2*$b1;
    return $determinant == 0;
  }
}

?>