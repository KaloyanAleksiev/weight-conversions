<?php

namespace KaloyanAleksiev\WeightConversions;

class Weight
{
    public function __construct(protected float $kilometers)
    {
    }

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function toPounds(): float
    {
        return $this->kilometers * 2.2046;
    }
}
