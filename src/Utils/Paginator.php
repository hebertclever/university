<?php

class Paginator {
    private $db;
    private $table;
    private $num_per_page;
    private $current_page;
    private $conditions;

    public function __construct($db, $table, $num_per_page = 10, $current_page = 1, $conditions = "") {
        $this->db = $db;
        $this->table = $table;
        $this->num_per_page = $num_per_page;
        $this->current_page = $current_page;
        $this->conditions = $conditions;
    }

    public function getData() {
        $start_from = ($this->current_page - 1) * $this->num_per_page;
        $stmt = $this->db->prepare("SELECT * FROM $this->table $this->conditions LIMIT :start_from, :num_per_page");
        $stmt->bindParam(':start_from', $start_from, PDO::PARAM_INT);
        $stmt->bindParam(':num_per_page', $this->num_per_page, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getTotalPages() {
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM $this->table $this->conditions");
        $stmt->execute();
        $total_records = $stmt->fetchColumn();
        
        return ceil($total_records / $this->num_per_page);
    }
}
