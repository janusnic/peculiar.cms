<?php

/**
 * Модель для работы с категориями
 */
class Category {

    /**
     * Список категорий для админпанели
     * Возвращает массив всех категорий, включая те, у которых статус отображения = 0
     *
     * @return array
     */
    public static function index () {
        $db = Connection::make();
        $db->exec("set names utf8");

        $sql = "SELECT id, name, status FROM category
                WHERE status = 1
                ORDER BY id ASC";

        $res = $db->query($sql);

        $catList = $res->fetchAll(PDO::FETCH_ASSOC);

        return $catList;
    }

    /**
     * Вместо числового статуса категории, отображаем определенную строку
     *
     * @param $status
     * @return string
     */
    public static function getStatusText ($status) {
        switch ($status) {
            case '1':
                return 'Отображается';
                break;
            case '0':
                return 'Скрыта';
                break;
        }
    }

    /**
     * Удаление категории(админка)
     *
     * @param $id
     * @return bool
     */
    public static function delete ($id) {
        $db = Connection::make();

        $sql = "
                DELETE FROM category WHERE id = :id
                ";

        $res = $db->prepare($sql);
        $res->bindParam(':id', $id, PDO::PARAM_INT);
        return $res->execute();
    }

    /**
     * Добавление категории(админка)
     *
     * @param $options массив параметров
     * @return bool
     */
    public static function add ($options) {

        $db = Connection::make();
        $db->exec("set names utf8");

        $sql = "
                INSERT INTO category(name, status)
                VALUES (:name, :status)
                ";

        $res = $db->prepare($sql);
        $res->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $res->bindParam(':status', $options['status'], PDO::PARAM_INT);

        return $res->execute();
    }

    /**
     * Возвращаем инфу о категории по ее id
     *
     * @param $id
     * @return mixed
     */
    public static function get ($id) {

        $db = Connection::make();
        $db->exec("set names utf8");

        $sql = "SELECT name, status FROM category
                WHERE id = :id";

        $res = $db->prepare($sql);

        $res->bindParam(':id', $id);
        $res->execute();

        $catList = $res->fetch(PDO::FETCH_ASSOC);

        return $catList;
    }

    /**
     * Изменение категории(админка)
     *
     * @param $id
     * @param $options - новые параметры
     * @return bool
     */
    public static function edit ($id, $options) {

        $db = Connection::make();
        $db->exec("set names utf8");

        $sql = "
                UPDATE category
                SET
                    name = :name,
                    status = :status
                WHERE id = :id
                ";

        $res = $db->prepare($sql);
        $res->bindParam(':name', $options['name'], PDO::PARAM_STR);
        $res->bindParam(':status', $options['status'], PDO::PARAM_INT);
        $res->bindParam(':id', $id, PDO::PARAM_INT);

        return $res->execute();
    }
}
