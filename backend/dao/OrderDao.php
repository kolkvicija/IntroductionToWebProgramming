<?php
require_once 'BaseDao.php';

class OrderDAO extends BaseDao {
    public function __construct() {
        parent::__construct('Orders');
    }

    public function getOrdersByUserId($userId) {
        $stmt = $this->connection->prepare("SELECT * FROM Orders WHERE userId = :userId");
        $stmt->bindParam(':userId', $userId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getOrdersByStatus($status) {
        $stmt = $this->connection->prepare("SELECT * FROM Orders WHERE orderStatus = :orderStatus");
        $stmt->bindParam(':orderStatus', $status);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>
