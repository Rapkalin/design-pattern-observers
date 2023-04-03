<?php

namespace App;

class Client
{

  /**
   * @param \App\Product $product
   *
   * @return void
   */
  public function update(Product $product) {
    // Envoie un e-mail au client pour l'informer de la promotion
    dump('The price has been updated. The new price is ' . $product->price . 'euros');
  }

}

