<?php

namespace App\Models;

class Client implements \SplObserver
{

    private string $code_id;

    public function __construct($code_id)
    {
        $this->code_id = $code_id;
    }

    /**
     * @param \SplSubject $product
     *
     * @return string
     */
    public function update(\SplSubject $product): void
    {

        // Send an e-mail to te client to inform him
        echo <<<HTML
            <div class="notification">Sending an email to the client $this->code_id...<br>
                 To warn him that the price has been updated: The new price is  $product->price euros<br></div>
        HTML;
    }

}

