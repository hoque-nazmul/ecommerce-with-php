<?php

namespace Bitm;

use PDO;

class Banner
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
        $query = "SELECT * FROM `banners`";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();
        $banners = $stmt->fetchAll();
        return $banners;
    }

    public function show($id)
    {
        $query = "SELECT * FROM `banners` WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        $banner = $stmt->fetch();
        return $banner;
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

    public function edit($id)
    {

        $query = "SELECT * FROM `banners` WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        $banner = $stmt->fetch();
        return $banner;
    }

    public function update($data){
        $_picture = $this->upload();

        $_id = $data['id'];
        $_title = $data['title'];
        $_detail = $data['msg'];
        $_link = $data['link'];
        $_is_active = $data['is_active'];
        $_html_banner = $data['html_banner'];
        $_is_draft = $data['is_draft'];

        $query = "UPDATE `banners` SET `title` = :title, `promotional_message` = :promotional_message, `link` = :link, `is_active` = :is_active, `html_banner` = :html_banner, `is_draft` = :is_draft, `picture` = :picture WHERE `banners`.`id` = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':title',$_title);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':promotional_message',$_detail);
        $stmt->bindParam(':link', $_link);
        $stmt->bindParam(':is_active', $_is_active);
        $stmt->bindParam(':html_banner', $_html_banner);
        $stmt->bindParam(':is_draft', $_is_draft);
        $stmt->bindParam(':picture', $_picture);
        $result = $stmt->execute();

        if($result){
            $_SESSION['success'] = "Banner is updated successfully";
        }else{
            $_SESSION['success'] = "Banner is not updated";
        }

        header("location:index.php");
    }

    public function delete($id)
    {
        $query = "DELETE FROM `banners` WHERE `banners`.`id` = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success'] = "Banner is deleted successfully";
        } else {
            $_SESSION['success'] = "Banner is not deleted";
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
            $destination = $approot . 'uploads/banner/' . $filename;

            $is_file_moved = move_uploaded_file($target, $destination);
            if ($is_file_moved) {

                $_picture = $filename;
            }
        } 
        
        return $_picture;
    }
}
