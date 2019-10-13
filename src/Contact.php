<?php

namespace Bitm;

use PDO;

class Contact
{
    public $id = null;
    public $conn = null;

    public function __construct()
    {
        session_start();
        $this->conn = new PDO("mysql:host=localhost;dbname=phpcrud", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function index()
    {
        $query = "SELECT * FROM `contacts` ORDER BY id DESC";

        $stmt = $this->conn->prepare($query);

        $result = $stmt->execute();
        $banners = $stmt->fetchAll();
        return $banners;
    }

    public function show($id)
    {
        $query = "SELECT * FROM `contacts` WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        $banner = $stmt->fetch();
        return $banner;
    }

    // For Admin Contact Controls
    public function Store($data)
    {
        $_name = $data['name'];
        $_email = $data['email'];
        $_subjects = $data['subjects'];
        $_comment = $data['comment'];

        // Insert Command

        $query = "INSERT INTO `contacts` (`name`,`email`,`subjects`,`comment`) VALUES (:name,:email,:subjects,:comment);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $_name);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':subjects', $_subjects);
        $stmt->bindParam(':comment', $_comment);
        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success'] = "Massage Successfully Sent!";
        } else {
            $_SESSION['success'] = "Massage Doesn't Sent!";
        }
        header("location:contact.php");
    }

    // For FrontEnd Contact Us Page
    public function frontStore($data)
    {
        $_name = $data['name'];
        $_email = $data['email'];
        $_subjects = $data['subjects'];
        $_comment = $data['comment'];

        // Insert Command

        $query = "INSERT INTO `contacts` (`name`,`email`,`subjects`,`comment`) VALUES (:name,:email,:subjects,:comment);";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':name', $_name);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':subjects', $_subjects);
        $stmt->bindParam(':comment', $_comment);
        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success'] = "Massage Successfully Sent!";
        } else {
            $_SESSION['success'] = "Massage Doesn't Sent!";
        }
        header("location:contact.php");
    }

    public function edit($id)
    {

        $query = "SELECT * FROM `contacts` WHERE id = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();
        $contact = $stmt->fetch();
        return $contact;
    }

    public function update($data){
        $_id = $data['id'];
        $_name = $data['name'];
        $_email = $data['email'];
        $_subjects = $data['subjects'];
        $_comment = $data['comment'];

        $query = "UPDATE `contacts` SET `name` = :name, `email` = :email, `subjects` = :subjects, `comment` = :comment WHERE `contacts`.`id` = :id;";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id',$_id);
        $stmt->bindParam(':name', $_name);
        $stmt->bindParam(':email', $_email);
        $stmt->bindParam(':subjects', $_subjects);
        $stmt->bindParam(':comment', $_comment);
        $result = $stmt->execute();

        if($result){
            $_SESSION['success'] = "Massage Replied Successfully";
        }else{
            $_SESSION['success'] = "Contact is not updated";
        }

        header("location:index.php");
    }

    public function delete($id)
    {
        $query = "DELETE FROM `contacts` WHERE `contacts`.`id` = :id";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':id', $id);

        $result = $stmt->execute();

        if ($result) {
            $_SESSION['success'] = "Contact is deleted successfully";
        } else {
            $_SESSION['success'] = "Contact is not deleted";
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
