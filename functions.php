  <?php
  # require MySql Connection
  require_once("database/DBController.php");

  # require Product class
  require_once("database/Product.php");

  # require Cart class
  require_once("database/Cart.php");

  #DBController object
  $db = new DBController();

  #Product object
  $product = new Product($db);
  $product_shuffle = $product->getData();

  #Cart object
  $cart = new Cart($db);
