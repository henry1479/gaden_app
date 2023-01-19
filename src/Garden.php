<?php

namespace GardenApp\App;

use GardenApp\App\GardenTree;


class Garden {

    // const APPLE_TREE = 10;
    // const PEAR_TREE = 15;
    private array $treeRepository = [];
    

    public function __construct()
    {
        $this->addTreeToGarden(10,"apple");
        $this->addTreeToGarden(15,"pear");
    }


    private function addTreeToGarden ($numberOfTrees, $type) {

        for($i=0; $i<$numberOfTrees; $i++){
            $this->treeRepository[] = new GardenTree($type);
        
        }

    }


    public function getTreeRepository()
    {
        return $this->treeRepository;
    }


}