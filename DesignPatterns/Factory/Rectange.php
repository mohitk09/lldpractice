<?php

namespace Factory;

class Rectange implements Shape
{
    public function draw(): void
    {
        print_r("Drawing rectange, Hooray!");
    }
}
