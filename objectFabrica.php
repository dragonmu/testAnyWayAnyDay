<?php
/**
* фабрика создает нужные классы
* возвращает списки и тд
* можно и сохранение сюда положить
*/
class objectFabrica {

  /**
  * тип хранится в базе к примеру, в админке дропдаун список
  */
  public static function create($type,  $data)
  {
        $className = $type;

        if (class_exists($className)) {
            return new $className($data);
        } else {
            throw new \Exception("Такого типа нету");
            // или return new classObject(); чтобы обрабатывать это потом
        }
  }
  
  /**
  * Получает список из базы
  */
  public static function getList($params) {
    //single tone подключения к бд и обрабатывает запросы
    $rows = sql::o()->query('select * from objects ?s',$params);
    
    $objects = array();
    foreach($rows as $row) {
      $objects[$row['id']] = self::create($data['type'],$data);
    }
    
    return $objects;
  }
}
