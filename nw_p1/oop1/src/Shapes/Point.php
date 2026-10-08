<?php

namespace Unicah\Oop1\Shapes;

class Point {
    private int $x;
    private int $y;
    private int $quadrant;


    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;

        if($this-> x>=0 && $this-> y>=0) {
            $this-> quadrant = 1;
        }
    }
}