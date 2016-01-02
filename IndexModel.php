<?php
class IndexModel {
    protected $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function getTheData() {
        $statement = $this->db->prepare('SELECT * FROM table');
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}
