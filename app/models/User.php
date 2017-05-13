<?php

/**
 * Модель для работы с пользователями
 */
class User {

   public static function index () {
        $con = Connection::make();
        $sql = "SELECT * FROM users ORDER BY id ASC";
        $con->exec("set names utf8");
        $res = $con->query($sql);
        $users = $res->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public static function add ($options) {

        $db = Connection::make();

        $sql = "
                INSERT INTO users(name, email, password, role_id)
                VALUES(:name, :email, :password, :role)
                ";

        $res = $db->prepare($sql);
        $res->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $res->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $res->bindParam(':password', $options['password'], PDO::PARAM_STR);
        $res->bindParam(':role', $options['role'], PDO::PARAM_INT);
        return $res->execute();
    }

    /**
     * Вытягиваем информацию о пользователе по id
     *
     * @param $userId
     * @return mixed
     */
    public static function get($userId) {

        $db = Connection::make();

        $sql = "
                SELECT id, name, email, password, role_id, status
                  FROM users
                    WHERE id = :id
                ";

        $res = $db->prepare($sql);

        $res->bindParam(':id', $userId);

        $res->execute();

        return $res->fetch(PDO::FETCH_ASSOC);
    }

  
    public static function edit ($userId, $options){

        $db = Connection::make();

        $sql = "
               UPDATE users
                    SET name = :name, password = :password, email = :email, role_id = :role, status = :status
                      WHERE id = :id
               ";

        $res = $db->prepare($sql);

        $res->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $res->bindParam(':password', $options['password'], PDO::PARAM_STR);
        $res->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $res->bindParam(':role', $options['role'], PDO::PARAM_INT);
        $status = $options['status']? 1:0;
        $res->bindParam(':status', $status, PDO::PARAM_INT);
        $res->bindParam(':id', $userId, PDO::PARAM_INT);

        return $res->execute();
    }

}
