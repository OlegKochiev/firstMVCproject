<?php
class AdminModel extends Model
{
    public function get_users_count(){
        $sql = "SELECT COUNT(*) FROM users";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $users_count = $stmt->fetchColumn();
        return $users_count;
    }
    public function get_orders_count(){
        $sql = "SELECT COUNT(*) FROM orders";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $orders_count = $stmt->fetchColumn();
        return $orders_count;
    }
    public function get_products_count(){
        $sql = "SELECT COUNT(*) FROM products";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $products_count = $stmt->fetchColumn();
        return $products_count;
    }
}