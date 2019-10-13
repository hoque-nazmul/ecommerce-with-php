<?php

namespace Bitm;

use PDO;

class AddCart
{
    public $id = null;
    public $title = null;
    public $conn = null;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=phpcrud", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Add To Cart
    public function addToCart($quantity, $id, $sId)
    {
        $_quantity = $quantity;
        $_productId = $id;

        $_sId = $sId;

        $query = "SELECT * FROM `product` WHERE id = :product_id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':product_id', $_productId);
        $result = $stmt->execute();
        $product = $stmt->fetch();

        $_product_title = $product['title'];
        $_price = $product['cost'];
        $_picture = $product['picture'];
        $_total_price = $_quantity * $_price;

        // Insert Command

        $query = "INSERT INTO `carts` (`sId`,`product_id`,`picture`,`product_title`,`qty`,`price`,`total_price`) VALUES (:sId,:product_id,:picture,:product_title,:qty,:price,:total_price);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':qty', $_quantity);
        $stmt->bindParam(':product_id', $_productId);
        $stmt->bindParam(':sId', $_sId);
        $stmt->bindParam(':picture', $_picture);
        $stmt->bindParam(':product_title', $_product_title);
        $stmt->bindParam(':price', $_price);
        $stmt->bindParam(':total_price', $_total_price);
        $result = $stmt->execute();

        header("location:cart.php");
    }

    // Get Cart Cart Using Session ID
    public function getCart($sId)
    {
        $query = "SELECT * FROM `carts` WHERE sId = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $sId);
        $result = $stmt->execute();
        $carts = $stmt->fetchAll();
        return $carts;
    }

    // Delete Cart
    public function delete($id)
    {
        $query = "DELETE FROM `carts` WHERE `carts`.`id` = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        
        header("location:cart.php");
    }

    public function getNum($sId)
    {
        $query = "SELECT * FROM `carts` WHERE sId = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $sId);
        $result = $stmt->execute();
        $carts = $stmt->fetchAll();
        return $carts;
    }

    

    

   

    
}
