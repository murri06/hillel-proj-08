<?php

class Figure
{

    public function __construct(protected string $color)
    {
    }

    public function getColor() : string
    {
        return $this->color;
    }


}