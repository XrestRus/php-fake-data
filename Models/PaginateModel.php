<?php

namespace Models;

/**
 * Класс модель и строитель запроса - пагинация
 */
class PaginateModel {
    private $_limit = "  ";
    
    public $count;
    public $current;
    public $limit;

    /**
     * Метод для строительства моделей
     * 
     */
    public function build(QueryModel $query) {
        if ($query->paginate->limit) {
            $skip = (int)$query->paginate->current * (int)$query->paginate->limit;
            $this->_limit = " LIMIT ".$skip.", ".(int)$query->paginate->limit;
        }
    }    

    /**
     * Метод для получение sql выражения
     * 
     * @return string $sql sql выражение
     */
    public function toString() {
        return $this->_limit;
    }

}