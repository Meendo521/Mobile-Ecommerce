<?php
#Use to fetch product data
class Product
{
  public $db = null;

  #Dependency injection
  public function __construct(DBController $db)
  {
    if (!isset($db->con)) return null;
    $this->db = $db;
  }

  #fetch product data using getData Method
  public function getData($table = 'product')
  {
    $this->db->con;
    $sql = "SELECT * FROM {$table}";
    $result = $this->db->con->query($sql);

    $resultArray = [];

    #fetch product data one by one
    while ($item = $result->fetch(PDO::FETCH_ASSOC)) {
      $resultArray[] = $item;
    }
    return $resultArray;
  }

  #get product using item id
  public function getProduct($item_id = null, $table = "product")
  {
    if (isset($item_id)) {
      $sql = "SELECT * FROM {$table} WHERE item_id={$item_id}";
      $result = $this->db->con->query($sql);
      $resultArray = [];

      #fetch product data one by one
      while ($item = $result->fetch(PDO::FETCH_ASSOC)) {
        $resultArray[] = $item;
      }
      return $resultArray;
    }
  }
}
