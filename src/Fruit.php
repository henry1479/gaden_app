<?php


namespace GardenApp\App;


class Fruit 
{
    private string $type;

    private int $weight;

    public function __construct(string $type, int $weight)
    {
        $this->type = $type;
        $this->weight = $weight;
    }


    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

}