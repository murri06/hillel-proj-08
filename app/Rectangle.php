<?php

require_once __DIR__ . "/Figure.php";

class Rectangle extends Figure
{

    public function __construct(private int $side1, private int $side2, string $color)
    {
        parent::__construct($color);
    }

    public function parameter(): int|float
    {
        return $this->side1 * 2 + $this->side2 * 2;
    }

    public function area(): int|float
    {
        return $this->side1 * $this->side2;
    }

    public function createFigure(): string
    {
        $color = $this->getColor();
        return "<div style='width:" . $this->side1 . "px; height:" . $this->side2 . "px; background-color:$color;'></div>";
    }

}