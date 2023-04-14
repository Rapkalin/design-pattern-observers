<?php

require 'vendor/autoload.php';

use App\Models\Client;
use App\Models\Partner;
use App\Models\Product;

// Init product price
$updatedPrice = 0;

// Utilisation
$product = new Product();
$partner = new Partner('PARTNER-1');
$client1 = new Client('CLIENT-1');
$client2 = new Client('CLIENT-2');
$product->attach($client1);
$product->attach($client2);
$product->attach($partner);
$product->attach($client2);

// If form was submited... Do something
if ($_POST) {
    if (is_numeric($_POST["updatedPrice"])) {
        $updatedPrice = strip_tags($_POST["updatedPrice"]);
        $product->fixPrice($updatedPrice);
    }
    else {
        echo
        <<<HTML
            <div id="error" style="visibility: hidden">Woupsy! Merci de réessayer, il semble y avoir un problème avec l'input renseigné.</div>
        HTML;
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <script src="src/Steel/style.js" defer></script>
        <link rel="stylesheet" href="src/Steel/style.scss">
    </head>
    <body>
        <div id="container">
            <form method="post">
                <textarea placeholder="Enter a price" class="textarea" name="updatedPrice"></textarea>
                <input  class="btn btn-flat"  type="submit" value="Go!"/>
            </form>
        </div>

        <button id="refreshButton" class="btn btn-flat-refresh" onClick="window.location.href=window.location.href" style="display: none">Refresh Page</button>

    </body>
</html>


