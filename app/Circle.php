<?php

require_once __DIR__ . "/Figure.php";

class Circle extends Figure
{

    public function __construct(private int $radius, string $color)
    {

        parent::__construct($color);
    }

    public function parameter(): int|float
    {
        return 2 * $this->radius * M_PI;
    }

    public function area(): int|float
    {
        return M_PI * ($this->radius ** 2);
    }

    public function createFigure(): string
    {
        $color = $this->getColor();
        return "<div style='width:" . $this->radius * 2 . "px; height:" . $this->radius * 2 . "px; background-color:$color; border-radius: 50%;'></div>";
    }

}