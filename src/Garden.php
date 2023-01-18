<?php

namespace GardenApp\App;

use GardenApp\App\GardenTree;


class Garden {

    private array $treeRepository = [];


    public function __construct()
    {
        $this->addTreeToGarden(2,"apple");
        $this->addTreeToGarden(1,"pear");
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