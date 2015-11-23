<?php

/**
* Это базовый класс любой записи из нашей таблицы
* в него заполнены соответствующие поля
* и функции общие для всех классов
*/
class objectClass  implements objectInterface {

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
  
  public function save() {
    if($this->isExists()) {
      ...тут сохраняем обьект
      ...поля обратно сжимаем в запрос
      return sql::o()->query('update objects set (?s) values (?s) where ?s',$params);
    } else {
      return sql::o()->query('insert into objects (?s) values (?s)',$params);
    }
  }
  
  ...далее функции интерфейса общие для всех, те которые разные мы переопределим в каждом конкретном классе
  public function getArea() {
    
  }
}
