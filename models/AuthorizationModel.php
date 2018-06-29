<?php
class AuthorizationModel extends Model
{
    public function check_user($login, $password){
        $sql = "SELECT * FROM users WHERE login = :login AND password = :password";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $login, PDO::PARAM_STR);
        $stmt->bindValue(":password", md5($password), PDO::PARAM_STR);
        $stmt->execute();
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!empty($res)) {
            $auth_status = true;
        } else {
            $auth_status = false;
        }
        return $auth_status;
    }
}