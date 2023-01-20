<?php 

namespace GardenApp\App;


use GardenApp\App\Fruit;

class GardenTree 
{
    private $type;

    private $numberOfFruits;

    private $fruitRepository = [];

    private $id;



    public function __construct($type)
    {
        $this->type = $type;
        $this->id = uniqid();
        $this->setNumberOfFruts();
        $this->addFruitToRepository();
        echo "Create $this->type tree! \n";
    }

    public function addFruitToRepository()
    {
        for($i=0;$i< $this->numberOfFruits; $i++){
            $this->fruitRepository[$i] = new Fruit($this->type);
        }

        echo "Fill $this->type repository!\n";
        
    }

    public function setNumberOfFruts() {
        if($this->type == "apple") {
            $this->numberOfFruits = rand(40,50);
        } else if ($this->type == "pear") {
            $this->numberOfFruits = rand(0,20);
        }
    }

    public function getFruitRepository() {
        return $this->fruitRepository;
    }


    public function getNumberOfFruits()
    {
        return $this->numberOfFruits;
    }


    public function getId ()
    {
        return $this->id;
    }

}
