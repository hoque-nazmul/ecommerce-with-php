<?php

namespace Bitm;

use PDO;

class GetBanners
{
    public $conn = null;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=phpcrud", "root", "");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getBanner()
    {
        $_start = 0;
        $_stop = 3;
        $query = "SELECT * FROM banners WHERE is_active = 1 ORDER BY id DESC LIMIT $_start, $_stop";

        $stmt = $this->conn->prepare($query);
        $result = $stmt->execute();
        $banners = $stmt->fetchAll();
        return $banners;
    }
}