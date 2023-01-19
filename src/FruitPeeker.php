<?php

namespace GardenApp\App;


use GardenApp\App\Garden;



class FruitPeeker {

    public bool $isWork = true;  

    public array $container = [];

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

        echo("Apples: $countApple. Sum weight of apples is $resultWeightApple kg \n" );
        echo("Pears: $countPear. Sum weight of pears is $resultWeightPear kg \n");
        
    }
}