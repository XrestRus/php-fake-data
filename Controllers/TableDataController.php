<?php

namespace Controllers;

use Classes\DBContext;
use Classes\QueryStringConvert;
use Models\QueryModel;

/**
 * Класс контроллер для работы с таблицей
 * 
 */
class TableDataController {

    private $_db;
    private $_arrayQueryCleared;

    public function __construct() {
        $this->_db = (new DBContext())->getConnect();
        $this->_arrayQueryCleared = (new QueryStringConvert())->getArrayQuery();
    }
    
    /**
     * Метод обработки
     * 
     * @return $responceJSON возвращает ответ в виде json
     */
    public function index() {
        $queryModel = new QueryModel();
        
        //Создаем модель и строим вложенные модели
        $queryModel
            ->parser($this->_arrayQueryCleared)
            ->build();

        //Сбор кол-во записей
        $queryModel->paginate->count = $this->_db
            ->query($queryModel->sqlToCount())
            ->fetch_array()[0] ?? 0;

        //Обращение к бд
        $querySelect = $this->_db
            ->query($queryModel->toString())
            ->fetch_all(MYSQLI_ASSOC);

        //Ответ
        $responceJson = json_encode([
            'paginate' => $queryModel->paginate,
            'body' => $querySelect
        ], JSON_UNESCAPED_UNICODE);

        return $responceJson;
    }

}
