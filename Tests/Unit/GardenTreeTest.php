<?php


namespace Tests\Unit;

use GardenApp\App\Fruit;
use GardenApp\App\GardenTree;
use PHPUnit\Framework\TestCase;


class GardenTreeTest extends TestCase 
{

    private GardenTree $object;

    protected function setUp(): void
    {
        $this->object = new GardenTree("pear");
    }

    public function testAddFruitToReposioty()
    {
        $result = $this->object->getFruitRepository()[1];
        $this->assertInstanceOf(Fruit::class, $result);

    }
    
    
    public function testSetNumberOfFruits()
    {
        $result = $this->object->getNumberOfFruits();
        $this->assertSame(3, $result);
    }
   
}


