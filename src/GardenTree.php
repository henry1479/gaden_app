<?php 




namespace GardenApp\App;


use GardenApp\App\Fruit;

class GardenTree 
{
    private $type;

    private $numberOfFruits;

    private $fruitRepository = [];



    public function __construct($type)
    {
        $this->type = $type;
        $this->setNumberOfFruts();
        $this->addFruitToRepository();
        echo "Create $this->type tree! \n";
    }

    public function addFruitToRepository()
    {
        for($i=0;$i< $this->numberOfFruits; $i++){
            $this->fruitRepository[$i] = new Fruit($this->type, 180);
        }

        echo "Fill apple repository!\n";
        
    }

    public function setNumberOfFruts() {
        if($this->type == "apple") {
            $this->numberOfFruits = 2;
        } else if ($this->type == "pear") {
            $this->numberOfFruits = 3;
        }
    }

    public function getFruitRepository() {
        return $this->fruitRepository;
    }


    public function getNumberOfFruits()
    {
        return $this->numberOfFruits;
    }



}
