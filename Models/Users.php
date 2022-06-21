<?php
namespace Models;

use \Core\Model;

class Users extends Model {

    private $uid;
    
    public function isLogged() {
        var_dump('teste');
        if($_SESSION('token')){
            $token = $_SESSION('token');
            var_dump($token);

            $sql = "SELECT id FROM users WHERE token = :token";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':token', $token);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $data = $sql->fetch();
                $this->uid = $data['id'];
                return true;
            }
        }
        return false;
    }

    public function getId() {
        return $this->uid;
    }
}