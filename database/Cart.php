<?php
class Cart
{
  public $db = null;
  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }
  #Insert into cart table
  public function insertIntoCart($params = null, $table = "cart")
  {
    if ($this->db->con != null) {
      if ($params != null) {
        $columns = implode(',', array_keys($params));
        $values = implode(',', array_values($params));
        #create sql query
        $sql = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

        $result = $this->db->con->query($sql);
        return $result;
      }
    }
  }
  #To get user_id and item_id and insert into cart table
  public function addToCart($userid, $itemid)
  {
    if (isset($userid) && isset($itemid)) {
      $params = [
        "user_id" => $userid,
        "item_id" => $itemid
      ];
      #Insert data into cart
      $result = $this->insertIntoCart($params);
      if ($result) {
        #Reload page
        header("Location:" . $_SERVER["PHP_SELF"]);
      }
    }
  }

  #delete cart item using cart item id
  public function deleteCart($item_id = null, $table = "cart")
  {
    if ($item_id != null) {
      $sql = "DELETE FROM {$table} WHERE item_id ={$item_id}";
      $result = $this->db->con->query($sql);
      if ($result) {
        #Reload page
        header("Location:" . $_SERVER["PHP_SELF"]);
      }
      return $result;
    }
  }

  #delete cart item using cart item id
  public function deleteWishList($item_id = null, $table = "wishlist")
  {
    if ($item_id != null) {
      $sql = "DELETE FROM {$table} WHERE item_id ={$item_id}";
      $result = $this->db->con->query($sql);
      if ($result) {
        #Reload page
        header("Location:" . $_SERVER["PHP_SELF"]);
      }
      return $result;
    }
  }

  #calculate sub-total
  public function getSum($arr)
  {
    if (isset($arr)) {
      $sum = 0;
      foreach ($arr as $item) {
        $sum += floatval($item[0]);
      }
      return sprintf('%.2f', $sum);
    }
  }

  #get item_id of the shopping cart list
  public function getCartId($cardArray = null, $key = "item_id")
  {
    if ($cardArray != null) {
      $card_id = array_map(function ($value) use ($key) {
        return $value[$key];
      }, $cardArray);
      return $card_id;
    }
  }

  #Save for later
  public function saveForLater($item_id = null, $savaTable = "wishlist", $fromTable = "cart")
  {
    if ($item_id != null) {
      $sql = "INSERT INTO {$savaTable} SELECT * FROM {$fromTable} WHERE item_id={$item_id};";
      $sql .= "DELETE FROM {$savaTable} WHERE item_id={$item_id};";

      #Execute multiple query
      $result = $this->db->con->prepare($sql);
      $result->execute();
      if ($result) {
        #Reload page
        header("Location:" . $_SERVER["PHP_SELF"]);
      }
      return $result;
      print_r($result);
    }
  }
}//End class
