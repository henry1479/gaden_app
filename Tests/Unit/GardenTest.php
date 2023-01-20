<?php


namespace Tests\Unit;

use GardenApp\App\Fruit;
use GardenApp\App\GardenTree;
use GardenApp\App\Garden;
use PHPUnit\Framework\TestCase;


class GardenTest extends TestCase 
{
    private Garden $object;


    protected function setUp():void
    {
        $this->object = new Garden();
    }

    public function testFillTreeRepositoryGardenTrees()
    {
        $result = $this->object->getTreeRepository();
        $this->assertContainsOnlyInstancesOf(GardenTree::class, $result);
    }

    public function testCountTreesGarden()
    {
        $result = count($this->object->getTreeRepository()) > 0;
        $this->assertTrue($result);
    }

}