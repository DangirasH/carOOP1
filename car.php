<?php
class Car
{
    private int $nbWheels = 4;
    private int $currentSpeed = 2;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 80;
    private bool $isEngineStarted = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this ->energy = $energy;
    }
    public function forward(): string
    {
        if ($this->isEngineStarted) {
            $this->currentSpeed = 10;
            $this->energyLevel -= 8;
            return "Go!";
        } else {
            return "Start the engine first!";
        }
    }
    public function brake(): string
    {
        if ($this->isEngineStarted) {
            $sentence = "";
            while ($this->currentSpeed > 0) {
                $this->currentSpeed--;
                $sentence .= "Brake!!!";
            }

            $sentence .= "I have stopped!";
            return $sentence;
        } else {
            return 'The engine is not started and I have stopped';
        }
    }

    public function start(): string
    {
        if ($this->isEngineStarted) {
            return 'Engine has already started.';
        } else {
            $this->isEngineStarted = true;
            $this->currentSpeed = 0;
            $this->energyLevel -= 5;
            return 'Starting the engine.';
        }
    }
    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
}