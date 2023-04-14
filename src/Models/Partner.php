<?php

namespace App\Models;

class Partner implements \SplObserver
{

    private string $code_id;

    public function __construct($code_id)
    {
        $this->code_id = $code_id;
    }

    /**
     * @param \SplSubject $product
     *
     * @return void
     */
    public function update(\SplSubject $product): void
    {
        // Send an e-mail to te client to inform him
        echo <<<HTML
            <div class="notification" style="visibility: hidden"> Sending a notification to the partner $this->code_id...<br> 
        Through the API to change its catalog with the new product price: $product->price euros <br></div>
        HTML;
    }

}