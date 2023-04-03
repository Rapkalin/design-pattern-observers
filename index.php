<?php

require 'vendor/autoload.php';

use App\Client;
use App\Product;
use Config\SQLiteConnection;

// DATABASE CONFIGURATION
/*$pdo = (new SQLiteConnection())->connect();
if ($pdo != null)
  echo 'Connected to the SQLite database successfully!';
else
  echo 'Whoops, could not connect to the SQLite database!';*/

//
$updatedPrice = 0;

if ($_POST) // If form was submited...
{
  if (is_numeric($_POST["updatedPrice"])) {
    $updatedPrice = strip_tags($_POST["updatedPrice"]);
  } else {
    throw new Exception('Merci de réessayer, il semble y avoir un problème avec l\'input renseigné.');
  }

}

// Utilisation
$product = new Product();
$client1 = new Client();
$client2 = new Client();
$product->attach($client1);
$product->attach($client2);
$product->fixPrice($updatedPrice);

?>

<form method="post">
  <textarea name="updatedPrice"></textarea>
  <input type="submit" value="Go!" />
</form>

