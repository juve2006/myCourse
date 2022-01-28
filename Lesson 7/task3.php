<?php
class Circle
{
    private $sqr;

    public function getSqr($r)
    {
      $this->sqr = M_PI * $r * $r;
      return $this->sqr;
    }

}

class Square
{

}

class Triangle
{

}

class Rectangle
{

}