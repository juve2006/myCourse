<?php
class Circle
{
    private float $sqr;
	
    public function getSqr(float $radius): float
    {
      $this->sqr = M_PI * $radius * $radius;
      return $this->sqr;
    }
}

class Square
{
	private float $sqr;
	
	public function getSqr(float $side): float
	{
		$this->sqr = $side * $side;
		return $this->sqr;
	}
}

class Triangle
{
	private float $sqr;
	private  const  HALF = 0.5;
	
	public function getSqr(float $base, float $height): float
	{
		$this->sqr = self::HALF * $base * $height;
		return $this->sqr;
	}
}

class Rectangle
{
	private float $sqr;
	
	public function getSqr(float $side1, float $side2): float
	{
		$this->sqr = $side1 * $side2;
		return $this->sqr;
	}
}

$circle1 = new Circle();
echo "Площа круга: ".sprintf("%01.2f",$circle1->getSqr(2.4));
echo '<br>';
$square1 = new Square();
echo "Площа квадрата: ".$square1->getSqr(4.5);
echo '<br>';
$triangle1 = new Triangle();
echo "Площа трикутника: ".$triangle1->getSqr(10, 4);
echo '<br>';
$rectangle1 = new Rectangle();
echo "Площа прямокутника: ".$rectangle1->getSqr(3, 2.2);
echo '<br>';