<?php


namespace Tests\Unit;

use GardenApp\App\Fruit;
use GardenApp\App\GardenTree;
use GardenApp\App\FruitPeeker;
use PHPUnit\Framework\TestCase;


class FruitPeekerTest extends TestCase 
{

    private FruitPeeker $object;

    protected function setUp(): void
    {
        $this->object = new FruitPeeker();
    }

    public function testPeekFruitsFromTheGarden()
    {
        $container = $this->object->getPeekerContainer();
        $this->assertContainsOnlyInstancesOf(Fruit::class, $container);
    }


    public function testFillData() {
        $data = $this->object->getData();
        $this->assertCount(4, $data);

    }

    public function testCountFruitsIsInteger()
    {
        $data = $this->object->getData();
        $this->assertIsInt($data[0]);
    }


    public function testWeightFruitsIsFloat()
    {
        $data = $this->object->getData();
        $this->assertIsFloat($data[3]);
    }


    

}