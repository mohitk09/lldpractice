<?php

namespace Factory;

class Main
{
    public static function main(): void
    {
        $shapeFactory = new ShapeFactory();
        $rectangle = $shapeFactory->getShape('rectangle');
        $rectangle->draw();
    }
}
