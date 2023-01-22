<?php

namespace GardenApp\App;


use GardenApp\App\Garden;



class FruitPeeker {


    private array $container = [];

    private $data = [];

    public function __construct()
    {
        $garden = new Garden();
        $this->peekFruitsFromTree($garden);
        
    }

   

    public function peekFruitsFromTree(Garden $garden)
    {


        foreach ($garden->getTreeRepository() as $tree) {
            foreach($tree->getFruitRepository() as $fruit) {
                $this->container[] = $fruit;
            }
        }  

        
        $this->countFruits();
        $this->showResult();

    }

  

    private function countFruits() {

        
        $countPear = 0;
        $countApple = 0;

        $weightPear = 0;
        $weightApple = 0;
        
        foreach($this->container as $fruit) {
            if($fruit->getType() == "pear"){
                $countPear += 1;
                $weightPear += $fruit->getWeight();
            } else if($fruit->getType() == "apple") {
                $countApple += 1;
                $weightApple += $fruit->getWeight();

            }
        }

        $resultWeightPear = $weightPear / 1000;
        $resultWeightApple = $weightApple / 1000;
        $this->data[] = $countApple;
        $this->data[] = $countPear;
        $this->data[] = $resultWeightApple;
        $this->data[] = $resultWeightPear;

       
    }


    public function getPeekerContainer()
    {
        return $this->container;
    }

    private function showResult()
    {
        echo("Apples: ". $this->data[0]. " Sum weight of apples is " .$this->data[2] . " kg \n" );
        echo("Pears: " . $this->data[1] . ". Sum weight of pears is " . $this->data[3] . " kg \n");
        
    }

    public function getData() {
        return $this->data;
    }
    
}