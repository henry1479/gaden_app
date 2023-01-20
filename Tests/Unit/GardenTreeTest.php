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

    public function testAddFruitToRepository()
    {
        $result = $this->object->getFruitRepository()[0];
        $this->assertInstanceOf(Fruit::class, $result);

    }

    /**
     * @depends testAddFruitToRepository
     * @dataProvider addData
     */

    
    
    public function testSetNumberOfFruits($data)
    {
        $result = $this->object->getNumberOfFruits();
        $this->assertContains($result, $data);
    }


    public function addData()
    {
        $result = [];

        for($i=0; $i<=20; $i++) {
            $result[] = $i;
        }
        return [
            [$result]
        ];
    }
   
}


