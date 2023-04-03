<?php

namespace App;

class Product
{

  private array $observers = [];
  public int|float $price;

  /**
   * @param Client $observer
   *
   * @return void
   */
  public function attach(Client $observer)
  {
    $this->observers[] = $observer;
  }

  /**
   * @return void
   */
  public function notify()
  {
    foreach ($this->observers as $observer) {
      $observer->update($this);
    }
  }

  /**
   * @param int|float $price
   *
   * @return void
   */
  public function fixPrice(int|float $price)
  {
    $this->price = $price;
    $this->notify();
  }
}