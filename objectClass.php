<?php

/**
* Это базовый класс любой записи из нашей таблицы
* в него заполнены соответствующие поля
* и функции общие для всех классов
*/
class objectClass {

  private $_id;
  private $_name;
  ..... тут дальше свойства из базы
  
  public function __construct($data) {
      $this->_id = isset($data['id'])?$data['id']:0;
      ....тут далее заполняем наш класс
  }
  
  public function __get($name) {
      $property = "_$name";
      switch($name) {
        .....тут более сложные свойства со своей логикой
        default:
          if (property_exists(get_class($this), $property)) {
            return $this->$property;
          }
        break;
      }
      
  }
  
  public function isExists() {
    return $this->_id > 0;
  }
}
