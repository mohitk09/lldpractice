<?php

namespace Factory;

class Square implements Shape
{
    public function draw(): void
    {
        print_r("Drawing square, Hooray!");
    }
}
