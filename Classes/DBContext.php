<?php

namespace Classes;

use mysqli;

/**
 * Класс для подключение к бд
 * 
 * @param string $host хостинг
 * @param string $user пользователь
 * @param string $password пароль
 * @param string $dbName  название база данных 
 */
class DBContext {
    private $_connect;
    
    public function __construct(
        string $host = HOST,
        string $user = USER,
        string $password = PASSWORD,
        string $dbName = DATABASENAME
    ) {
        $this->_connect = new mysqli($host, $user, $password, $dbName); 
    }

    /**
     * Метод ля получение подключения
     * 
     * @return mysqli возвращает подключение MySql
     */
    public function getConnect() {
        return $this->_connect;
    }
}