<?php
namespace Creational\AbstractFactory;
use Creational\AbstractFactory\CarInterface;
class BMWCar implements CarInterface{
      private $price;
      public function __construct(int $price)
      {
            $this->price = $price;
      }
      public function calculatePrice(){
            return $this->price +120;
      }
}