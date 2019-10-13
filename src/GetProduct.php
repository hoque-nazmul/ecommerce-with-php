<?php

namespace Bitm;

use PDO;

class GetProduct
{
    public $id = null;
    public $conn = null;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=phpcrud", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Get Product From FEATURE Item
    public function GetFeatureProduct()
    {
        $_num = 4;
        $query = "SELECT * FROM product WHERE product_type = 'feature' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From NEW Item
    public function GetNewProduct()
    {
        $_num = 4;
        $query = "SELECT * FROM product WHERE product_type = 'new' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From TECH PRODUCTS Item
    public function GetTechProduct()
    {
        $_num = 4;
        $query = "SELECT * FROM product WHERE product_type = 'product_tech' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From LADIES DRESS Item
    public function GetLadyProduct()
    {
        $_num = 4;
        $query = "SELECT * FROM product WHERE product_type = 'product_ladies' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From SMART SHOES Item fo Brand
    public function GetBrandShoesProduct()
    {
        $_num = 4;
        $query = "SELECT * FROM product WHERE product_type = 'brandShoe' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From LADIES DRESS Item fo Brand
    public function GetBrandLadyProduct()
    {
        $_num = 4;
        $query = "SELECT * FROM product WHERE product_type = 'product_ladies' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From TECH Item fo Brand
    public function GetBrandTechProduct()
    {
        $_num = 4;
        $query = "SELECT * FROM product WHERE product_type = 'product_tech' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From MOST WANTED fo Brand
    public function GetMostProduct()
    {
        $_num = 3;
        $query = "SELECT * FROM product WHERE product_type = 'most' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From SCARFS fo Brand
    public function GetSCARFSProduct()
    {
        $_num = 3;
        $query = "SELECT * FROM product WHERE product_type = 'scarf' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Product From On SALE fo Brand
    public function GetSALEProduct()
    {
        $_num = 3;
        $query = "SELECT * FROM product WHERE product_type = 'onSale' ORDER BY id DESC LIMIT $_num";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $product = $stmt->fetchAll();
        return $product;
    }

    // Get Single Product
    public function GetSingleProduct($id)
    {
        $query = "SELECT * FROM `product` WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }


}