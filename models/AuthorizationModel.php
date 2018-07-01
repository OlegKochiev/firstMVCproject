<?php
class AuthorizationModel extends Model
{
    public function get_user_id($login, $password){
        $sql = "SELECT id FROM users WHERE login = :login AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":password", md5($password), PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetch();
        if (!empty($res)) {
            $user_id = $res['id'];
        } else {
            $user_id = false;
        }
        return $user_id;
    }
}