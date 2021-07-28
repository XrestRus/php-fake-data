<?php

namespace Models;

/**
 * Класс модель и строитель запроса
 * 
 * @param FilterModel $filter модель хостинга
 * @param SortModel $sort модель сортировки
 * @param PaginateModel $paginate модель пагинации
 */
class QueryModel {
    public FilterModel $filter;
    public SortModel $sort;
    public PaginateModel $paginate;

    public function __construct() {
        $this->filter = new FilterModel();
        $this->sort = new SortModel();
        $this->paginate = new PaginateModel();
    }

    /**
     * Метод для парсинга массива запроса на модель
     * 
     * @param Array $arrayQueryCleared массив http запроса
     * 
     * @return QueryModel возвращает текущию модель
     */
    public function parser(Array $arrayQueryCleared) {
        foreach ($arrayQueryCleared as $key => $criteria) {
            switch ($key) {
                case 'filter':
                    $this->filter->field = $criteria[0] ?? null;
                    $this->filter->type = $criteria[1] ?? null;
                    $this->filter->value = $criteria[2] ?? null;
                break;
                case 'sort':
                    $this->sort->field = $criteria[0] ?? null;
                    $this->sort->type = $criteria[1] ?? null;
                break;
                case 'paginate':
                    $this->paginate->current = $criteria[0] ?? 1;
                    $this->paginate->limit = $criteria[1] ?? 5;
                    $this->paginate->count = 0;
                break;
            }
        }

        return $this;
    }

    /**
     * Метод для строительства моделей
     * 
     * @return QueryModel возвращает текущию модель
     */
    public function build() {
        $this->filter->build($this);
        $this->sort->build($this);
        $this->paginate->build($this);

        return $this;
    }

    /**
     * Метод для получение sql выражения на получение кол-ва записей
     * 
     * @return string $sql sql выражение
     */
    public function sqlToCount() {
        return "SELECT count(id) FROM `fake_data` "
            .$this->filter->toString()
            .$this->sort->toString();
    }

    /**
     * Метод для получение sql выражения select, со всеми sql выражениями вложенных моделей
     * 
     * @return string $sql sql выражение
     */
    public function toString() {
        return "SELECT * FROM `fake_data` "
            .$this->filter->toString()
            .$this->sort->toString()
            .$this->paginate->toString();
    }
}