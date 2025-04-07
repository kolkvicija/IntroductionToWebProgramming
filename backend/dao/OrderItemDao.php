<?php
require_once 'BaseDao.php';

class OrderItemDAO extends BaseDao {
    public function __construct() {
        parent::__construct('OrderItems');
    }

    public function getOrderItemsByOrderId($orderId) {
        $stmt = $this->connection->prepare("SELECT * FROM OrderItems WHERE orderId = :orderId");
        $stmt->bindParam(':orderId', $orderId);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getOrderItemsByProductId($productId) {
        $stmt = $this->connection->prepare("SELECT * FROM OrderItems WHERE productId = :productId");
        $stmt->bindParam(':productId', $productId);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>
