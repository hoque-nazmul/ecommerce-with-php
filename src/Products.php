<?php

namespace Bitm;

use PDO;

class Products
{
    public $id = null;
    public $title = null;
    public $conn = null;

    public function __construct()
    {
        session_start();
        $this->conn = new PDO("mysql:host=localhost;dbname=phpcrud", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index()
    {
        $query = "SELECT * FROM `product`";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();
        //var_dump($result);
        $products = $stmt->fetchAll();
        return $products;
    }

    public function show($id)
    {

        $query = "SELECT * FROM `product` WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public function store($data)
    {
        $_picture = $this->upload();
        $_title = $data['title'];
        $_detail = $data['short_description'];
        $_description = $data['description'];
        $_total_sales = $data['total_sales'];
        $_product_type = $data['product_type'];
        $_cost = $data['cost'];
        $_mrp = $data['mrp'];
        $_special_price = $data['special_price'];
        $_is_active = $data['is_active'];

        // Insert Command

        $query = "INSERT INTO `product` (`title`,`short_description`,`description`,`total_sales`,`product_type`,`cost`,`mrp`,`special_price`,`is_active`,`picture`) VALUES (:title,:short_description,:descript,:total_sales,:product_type,:cost,:mrp,:special_price,:is_active,:picture);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':short_description', $_detail);
        $stmt->bindParam(':descript', $_description);
        $stmt->bindParam(':total_sales', $_total_sales);
        $stmt->bindParam(':product_type', $_product_type);
        $stmt->bindParam(':cost', $_cost);
        $stmt->bindParam(':mrp', $_mrp);
        $stmt->bindParam(':special_price', $_special_price);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':picture', $_picture);
        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success'] = "Product is added successfully";
        } else {
            $_SESSION['success'] = "Product is not added";
        }
        header("location:index.php");
    }

    public function edit($id)
    {
        $query = "SELECT * FROM `product` WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        $product = $stmt->fetch();
        return $product;
    }

    public function update($data){
        $_picture = $this->upload();

        $_id = $data['id'];
        $_title = $data['title'];
        $_detail = $data['short_description'];
        $_description = $data['description'];
        $_total_sales = $data['total_sales'];
        $_product_type = $data['product_type'];
        $_cost = $data['cost'];
        $_mrp = $data['mrp'];
        $_special_price = $data['special_price'];
        $_is_active = $data['is_active'];


        $query = "UPDATE `product` SET `title` = :title, `short_description` = :short_description, `description` = :descript, `total_sales` = :total_sales, `product_type` = :product_type, `cost` = :cost, `mrp` = :mrp, `special_price` = :special_price, `is_active` = :is_active, `picture` = :picture WHERE `product`.`id` = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':short_description', $_detail);
        $stmt->bindParam(':descript', $_description);
        $stmt->bindParam(':total_sales', $_total_sales);
        $stmt->bindParam(':product_type', $_product_type);
        $stmt->bindParam(':cost', $_cost);
        $stmt->bindParam(':mrp', $_mrp);
        $stmt->bindParam(':special_price', $_special_price);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':picture', $_picture);
        $result = $stmt->execute();

        if($result){
            $_SESSION['success'] = "Product is updated successfully";
        }else{
            $_SESSION['success'] = "Product is not updated";
        }

        header("location:index.php");

    }

    public function delete($id)
    {
        $query = "DELETE FROM `product` WHERE `product`.`id` = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success'] = "Product is deleted successfully";
        } else {
            $_SESSION['success'] = "Product is not deleted";
        }
        header("location:index.php");
    }

    private function upload()
    {
        $approot = $_SERVER['DOCUMENT_ROOT'] . '/shop/';
        $_picture = null;
        if ($_FILES['picture']['name'] != "") {
            $filename = "IMG_" . time() . "_" . $_FILES['picture']['name'];
            $target = $_FILES["picture"]["tmp_name"];
            $destination = $approot . 'uploads/product/' . $filename;

            $is_file_moved = move_uploaded_file($target, $destination);
            if ($is_file_moved) {

                $_picture = $filename;
            }
        } 
        return $_picture;
    }
}
