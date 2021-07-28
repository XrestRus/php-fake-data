<?php

namespace Models;

/**
 * Класс модель и строитель запроса - фильтрация
 * 
 * @param $field поле
 * @param $type тип фильтрации
 * @param $value значение
 */
class FilterModel {
    private $_buildWhere = "  ";

    public $field;
    public $type;
    public $value;

    /**
     * Метод для строительства моделей
     * 
     */
    public function build(QueryModel $query) {
        switch ($query->filter->type) {
            case 'equals':
                $this->_buildWhere = " WHERE ".$query->filter->field." = ".$query->filter->value;
                break;
            case 'more':
                $this->_buildWhere = " WHERE ".$query->filter->field." > ".$query->filter->value;
                break;
            case 'less':
                $this->_buildWhere = " WHERE ".$query->filter->field." < ".$query->filter->value;
                break;
            case 'contains':
                $this->_buildWhere = " WHERE ".$query->filter->field." LIKE '%".urldecode($query->filter->value)."%'";
                break;
        }
    }

    /**
     * Метод для получение sql выражения
     * 
     * @return string $sql sql выражение
     */
    public function toString() {
        return $this->_buildWhere;
    }
}