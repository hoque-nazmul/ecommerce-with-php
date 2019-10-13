<?php

namespace Bitm;

use PDO;

class Helpers
{
    public $id = null;
    public $conn = null;

    public function __construct()
    {
        session_start();
        $this->conn = new PDO("mysql:host=localhost;dbname=phpcrud", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function signUp($data)
    {
        $_name = $data['name'];
        $_email = $data['email'];
        $_password = $data['password'];
        $_phone = $data['phone'];
        $_address = $data['address'];
        $_city = $data['city'];
        $_country = $data['country'];
        $_zipcode = $data['zipcode'];

        // Insert Command

        $query = "INSERT INTO `customers` (`name`,`address`,`city`,`country`,`zipcode`,`phone`,`email`,`password`) VALUES (:name,:address,:city,:country,:zipcode,:phone,:email,:password);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $_name);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':password', $_password);
        $stmt->bindParam(':phone', $_phone);
        $stmt->bindParam(':address', $_address);
        $stmt->bindParam(':city', $_city);
        $stmt->bindParam(':country', $_country);
        $stmt->bindParam(':zipcode', $_zipcode);
        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success'] = "Already created a account. Now, You are ready for login";
        } else {
            $_SESSION['success'] = "Account doesn't created!";
        }
        header("location:login.php");
    }

    public function checkLogin()
    {
        $_email = $_POST['email'];
        $_password = $_POST['password'];
        $query = "SELECT * FROM `customers` WHERE email = :email AND password = :password";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':email',$_email);
        $stmt->bindParam(':password', $_password);

        $result = $stmt->execute();
        $login = $stmt->fetchAll();
        
        if(count($login)==1){
            $_SESSION['login'] = true;
            header("location:checkOut.php");
        }else{
            $_SESSION['error'] = "<div class='alert alert-success' style='width:500px;margin-left:17%'>You Haven't any account. Please Create Account</div>";
            header("location:login.php");
        }
    }

    public function store($data)
    {
        $_picture = $this->upload();
        $_title = $data['title'];
        $_detail = $data['msg'];
        $_link = $data['link'];
        $_is_active = $data['is_active'];
        $_html_banner = $data['html_banner'];
        $_is_draft = $data['is_draft'];

        // Insert Command

        $query = "INSERT INTO `banners` (`title`,`promotional_message`,`link`,`is_active`,`html_banner`,`is_draft`,`picture`) VALUES (:title,:promotional_message,:link,:is_active,:html_banner,:is_draft,:picture);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title', $_title);
        $stmt->bindParam(':promotional_message', $_detail);
        $stmt->bindParam(':link', $_link);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':html_banner', $_html_banner);
        $stmt->bindParam(':is_draft', $_is_draft);
        $stmt->bindParam(':picture', $_picture);
        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success'] = "Banner is added successfully";
        } else {
            $_SESSION['success'] = "Banner is not added";
        }
        header("location:index.php");
    }





    // public function edit($id)
    // {

    //     $query = "SELECT * FROM `banners` WHERE id = :id";

    //     $stmt = $this->conn->prepare($query);
    //     $stmt->bindParam(':id', $id);

    //     $result = $stmt->execute();
    //     $banner = $stmt->fetch();
    //     return $banner;
    // }

    // public function update($data){
    //     $_picture = $this->upload();

    //     $_id = $data['id'];
    //     $_title = $data['title'];
    //     $_detail = $data['msg'];
    //     $_link = $data['link'];
    //     $_is_active = $data['is_active'];
    //     $_html_banner = $data['html_banner'];
    //     $_is_draft = $data['is_draft'];

    //     $query = "UPDATE `banners` SET `title` = :title, `promotional_message` = :promotional_message, `link` = :link, `is_active` = :is_active, `html_banner` = :html_banner, `is_draft` = :is_draft, `picture` = :picture WHERE `banners`.`id` = :id;";

    //     $stmt = $this->conn->prepare($query);
    //     $stmt->bindParam(':title',$_title);
    //     $stmt->bindParam(':id',$_id);
    //     $stmt->bindParam(':promotional_message',$_detail);
    //     $stmt->bindParam(':link', $_link);
    //     $stmt->bindParam(':is_active', $_is_active);
    //     $stmt->bindParam(':html_banner', $_html_banner);
    //     $stmt->bindParam(':is_draft', $_is_draft);
    //     $stmt->bindParam(':picture', $_picture);
    //     $result = $stmt->execute();

    //     if($result){
    //         $_SESSION['success'] = "Banner is updated successfully";
    //     }else{
    //         $_SESSION['success'] = "Banner is not updated";
    //     }

    //     header("location:index.php");
    // }

    // public function delete($id)
    // {
    //     $query = "DELETE FROM `banners` WHERE `banners`.`id` = :id";

    //     $stmt = $this->conn->prepare($query);
    //     $stmt->bindParam(':id', $id);

    //     $result = $stmt->execute();

    //     if ($result) {
    //         $_SESSION['success'] = "Banner is deleted successfully";
    //     } else {
    //         $_SESSION['success'] = "Banner is not deleted";
    //     }
    //     header("location:index.php");
    // }

    // private function upload()
    // {
    //     $approot = $_SERVER['DOCUMENT_ROOT'] . '/shop/';
    //     $_picture = null;
    //     if ($_FILES['picture']['name'] != "") {
    //         $filename = "IMG_" . time() . "_" . $_FILES['picture']['name'];
    //         $target = $_FILES["picture"]["tmp_name"];
    //         $destination = $approot . 'uploads/banner/' . $filename;

    //         $is_file_moved = move_uploaded_file($target, $destination);
    //         if ($is_file_moved) {

    //             $_picture = $filename;
    //         }
    //     } 
        
    //     return $_picture;
    // }
}
