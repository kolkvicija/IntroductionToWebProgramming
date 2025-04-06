<?php
require_once 'BaseDao.php';

class ProductDAO extends BaseDao {
    public function __construct() {
        parent::__construct('Products');
    }

    public function getProductsByCategory($categoryId) {
        $stmt = $this->connection->prepare("SELECT * FROM Products WHERE categoryId = :categoryId");
        $stmt->bindParam(':categoryId', $categoryId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProductByName($name) {
        $stmt = $this->connection->prepare("SELECT * FROM Products WHERE name = :name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>
