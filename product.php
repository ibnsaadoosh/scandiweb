<?php 

class Product 
{
    public $sku;
    public $name;
    public $price;

    public function __construct($sku, $name, $price)
    {
      $this->sku = $sku;
      $this->name = $name;
      $this->price = $price;
    }
}

class DVD extends Product 
{
  public $size;
  public $conn;
   
  public function __construct($parameters = array())
  { 
    foreach($parameters as $key => $value) 
    {
      $this->$key = $value;
    }

    $this->conn = new mysqli("localhost", "saad", "passsaad", "scandi");
    if($this->conn->connect_error) 
    {
      die("Connection failed: " . $this->$conn->connect_error);
    }
    else
    {
      return $this->conn;
    }
  }

    public function save()
    {
      $query = "INSERT INTO dvd(sku, name, price, size) 
      values ('$this->sku', '$this->name', '$this->price', '$this->size')";
      if($this->conn->query($query))
      {
        echo '<script> window.location="index.php" </script>';
      }
      else
      {
        echo '<script> window.location="addproduct.html" </script>';
      }
    }  
    
    public function read()
    {
      $query = "SELECT * from dvd";
      $result = $this->conn->query($query);
      if($result)
      {
        return $result;
      }
      else
      {
        echo '<p> query error </p>';
      }
    }

    public function remove($checked_items)
    {
      foreach($checked_items as $item)
      {
        $this->conn->query("DELETE FROM dvd where SKU = '$item'");
      }
    }
}

class Furniture extends Product 
{
    public $height, $width, $length;
    public $conn;

    public function __construct($parameters = array())
    { 
      foreach($parameters as $key => $value) 
      {
        $this->$key = $value;
      }

      $this->conn = new mysqli("localhost", "saad", "passsaad", "scandi");
      if($this->conn->connect_error) 
      {
        die("Connection failed: " . $this->$conn->connect_error);
      }
      else
      {
        return $this->conn;
      }
    }

    public function save()
    {
      $query = "INSERT INTO furniture(sku, name, price, height, width, length) 
      values ('$this->sku', '$this->name', '$this->price', '$this->height', '$this->width', '$this->length')";
      
      if($this->conn->query($query))
      {
        echo '<script> window.location="index.php" </script>';
      }
      else
      {
        echo '<script> window.location="addproduct.html" </script>';
      }
    }  
    
    public function read()
    {
      $query = "SELECT * from furniture";
      $result = $this->conn->query($query);
      if($result)
      {
        return $result;
      }
      else
      {
        echo '<p> query error </p>';
      }
    }

    public function remove($checked_items)
    {
      foreach($checked_items as $item)
      {
        $this->conn->query("DELETE FROM furniture where SKU = '$item'");
      }
    }
}

class Book extends Product 
{
    public $weight;
    public $conn;

    public function __construct($parameters = array())
    { 
      foreach($parameters as $key => $value) 
      {
        $this->$key = $value;
      }

      $this->conn = new mysqli("localhost", "saad", "passsaad", "scandi");
      if($this->conn->connect_error) 
      {
        die("Connection failed: " . $this->$conn->connect_error);
      }
      else
      {
        return $this->conn;
      }
    }

    public function save()
    {
      $query = "INSERT INTO book(sku, name, price, weight) 
      values ('$this->sku', '$this->name', '$this->price', '$this->weight')";
      
      if($this->conn->query($query))
      {
        echo '<script> window.location="index.php" </script>';
      }
      else
      {
        echo '<script> window.location="addproduct.html" </script>';
      }
    }  
    
    public function read()
    {
      $query = "SELECT * from book";
      $result = $this->conn->query($query);
      if($result)
      {
        return $result;
      }
      else
      {
        echo '<p> query error </p>';
      }
    }

    public function remove($checked_items)
    {
      foreach($checked_items as $item)
      {
        $this->conn->query("DELETE FROM book where SKU = '$item'");
      }
    }
}

?>