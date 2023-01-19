<?php


namespace GardenApp\App;


class Fruit 
{
    private string $type;

    private int $weight;

    public function __construct(string $type)
    {
        $this->type = $type;
        $this->setWeight();
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

    public function setWeight()
    {
        if($this->type == "apple") {
            $this->weight = rand(150,180);
        } else if($this->type == "pear") {
            $this->weight =  rand(140,170);
        }
    }

}