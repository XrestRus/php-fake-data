<?php

namespace Models;

/**
 * Класс модель и строитель запроса - сортировка
 * 
 * @param $field поле
 * @param $type тип сортировки
 */
class SortModel {
    private $_buildOrderBy = "  ";
    
    public $field;
    public $type;

    /**
     * Метод для строительства моделей
     * 
     */
    public function build(QueryModel $query) {
        if ($query->sort->field) {
            $this->_buildOrderBy = " ORDER BY ".$query->sort->field." ".$query->sort->type;
        }
    }  

    /**
     * Метод для получение sql выражения
     * 
     * @return string $sql sql выражение
     */
    public function toString() {
        return $this->_buildOrderBy;
    }
}