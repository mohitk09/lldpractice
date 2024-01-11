<?php

namespace Factory;

class ShapeFactory
{
    public function getShape(string $shape): Shape
    {
        switch ($shape) {
            case 'rectangle':
                return new Rectange();
            case 'square':
                return new Square();
            default:
                return null;
        }
    }
}
