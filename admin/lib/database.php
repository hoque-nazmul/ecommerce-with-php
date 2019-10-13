<?php 
include_once("config.php");
session_start();
class Database{
    private $host   = HOST;
    private $user   = USER;
    private $pass   = PASSWORD;
    private $dbname = DBNAME;
    private $link = "";
    private $error = "";
    public function __construct()
    {
        $this->ConnectDB();
    }

    public function ConnectDB(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
        if(!$this->link){
            $this->error = ("Connection Failed!") or die($this->link->connect_error());
        }
    }

    public function select($query){
        $select = $this->link->query($query) or die($this->link->error.__LINE__);
        if($select->num_rows > 0){
            return $select;
        }else{
            return false;
        }
    }

    public function create($query){
        $create = $this->link->query($query) or die($this->link->error.__LINE__);
        if($create){
            $_SESSION['success'] = "Data Inserted Succesfully!";
            header("Location:index.php");
        }else{
            echo "Data Not Inserted!";
        }
    }

    public function delete($query){
        $delete = $this->link->query($query) or die($this->link->error.__LINE__);
        if($delete){
            $_SESSION['success'] = "Data Deleted Succesfully!";
            header("Location:index.php");
        }
    }

    public function edit($query){
        $edit = $this->link->query($query) or die($this->link->error.__LINE__);
        if($edit){
            $_SESSION['success'] = "Data Updated Succesfully!";
            header("Location:index.php");
        }else{
            echo "Data Not Updated!";
        }
    }

}
