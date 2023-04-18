<?php

namespace App\Models;

use SplObserver;
use SplObjectStorage;

class Product implements \SplSubject
{

    private SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @param SplObserver $observer
     *
     * @return void
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @return void
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @param \SplObserver $observer
     *
     * @return void
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }
    
    /**
     * @param int|float $price
     *
     * @return void
     */
    public function fixPrice(int|float $price): void
    {
        $this->price = $price;
        $this->notify();
    }



}