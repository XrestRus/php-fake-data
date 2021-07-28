<?php

namespace Classes;

/**
 * Класс парсинга Query запроса(GET)
 * 
 */
class QueryStringConvert {
    private $_arrayQueryCleared = [];
    
    /**
     * Инициализирует всю работу
     */
    public function __construct() {
        $strQuery = $this->replaceStr();
        $arrayQueryCrude = $this->splitStr($strQuery);

        $this->convert($arrayQueryCrude);
    }
    
    /**
     * Метод возвращает массив с query параметрами
     * 
     * @return array $arrayQueryCleared возвращает массив
     */
    public function getArrayQuery() {
        return $this->_arrayQueryCleared;
    }

    /**
     * Метод возвращает строку
     * 
     * @return string $strQuery возвращает строку с удаленными []
     */
    private function replaceStr() {
        return str_replace(['[',']'], " ", $_SERVER['QUERY_STRING']);
    }

    /**
     * Метод возвращает массив, значений разделенный по = и & 
     * 
     * @return array $strQuery возвращает массив 
     */
    private function splitStr(string $strQuery) {
        return preg_split("/[=&]+/", $strQuery);
    }

    /**
     * Создает массив с параметрами
     */
    private function convert(array $arrayQueryCrude) {
        for ($i = 0; $i < count($arrayQueryCrude) - 1; $i += 2) { 
            $this->_arrayQueryCleared = array_merge(
                $this->_arrayQueryCleared, 
                array($arrayQueryCrude[$i] => explode(',',trim($arrayQueryCrude[$i + 1])))
            );
        }
    }
}
