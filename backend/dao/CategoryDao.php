<?php
require_once 'BaseDao.php';

class CategoryDAO extends BaseDao {
    public function __construct() {
        parent::__construct('Categories');
    }

    public function getCategoryByName($name) {
        $stmt = $this->connection->prepare("SELECT * FROM Categories WHERE name = :name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>
