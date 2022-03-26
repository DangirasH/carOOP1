<?php

class car
{

    private string $color;
    private string $typeOfEnergy;
    private int $levelOfEnergy;
    private int $numberOfWheels;
    private int $numberOfSeats;
    private int $averageSpeed;

    public function __construct($color, $numberOfSeats, $typeOfEnergy)
    {
        $this->color = $color;
        $this->numberOfSeats = $numberOfSeats;
        $this->typeOfEnergy = $typeOfEnergy;
    }


    public function start():string
    {
        return "I start";
    }

    public function moveFoward():string
    {
        return "I move foward";
    }
    public function break():string
    {
        return "I break";
    }
}
