<?php
namespace Tests;

use Creational\FactoryMethod\Factories\BENZBrandFactory;
use Creational\FactoryMethod\Factories\BMWBrandFactory;
use Creational\FactoryMethod\Models\BENZBrand;
use Creational\FactoryMethod\Models\BMWBrand;
use PHPUnit\Framework\TestCase;
class FactoryMethodTest extends TestCase
{
    public function  testCanBuildBMWBrand()
    {
      $brandFactory = new BMWBrandFactory();
      $myBrand = $brandFactory->BuildBrand();
      $this->assertInstanceOf(BMWBrand::class, $myBrand);
    }
    public function  testCanBuildBENZBrand()
    {
      $brandFactory = new BENZBrandFactory();
      $myBrand = $brandFactory->BuildBrand();
      $this->assertInstanceOf(BENZBrand::class, $myBrand);

    }
}