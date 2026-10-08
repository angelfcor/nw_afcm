<?php
namespace Unicah\Oop1\Math;

class Point {
    private int $x;
    private int $y;
    //para acceder a cualquier metodo de la clase se tiene que hacer referencia a la instancia y eso se hace con la variable $this->
    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }

    public function toString() {
        return sprintf("P( %i, %i",
            $this->x,
            $this->y
        );
    }

        public function getX(): int{
            return $this->x;
        }

        public function getY(): int{
            return $this->y;
        }

        public function distance(Point $pointb) {
            // x^2 + y^2 = c^2 //
            $distancia = sqrt(
                pow($this->x - $pointb->getX() ,2) +
                    pow($this->y - $pointb->getY() ,2)
            );
            
            return $distancia;
            }
}