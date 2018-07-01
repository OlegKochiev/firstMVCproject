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
    public function get_orders(){
        $sql = "
            SELECT 
                orders.id as id,
                orders.amount as amount,
                users.fullname as user_name,
                users.email as email
            FROM orders
            JOIN users on users.id = orders.user_id
        ";
        $result = [];
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[$row['id']] = $row;
        }
        return $result;
    }
}