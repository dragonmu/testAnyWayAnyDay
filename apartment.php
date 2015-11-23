<?php

/**
* класс квартиры
* функции и тд соответствуют исключительно квартире
*/
class apartament extends objectClass {
  
  
  public function __get($name) {
    switch($name) {
      case 'rooms':
        return $this->emptyRooms();
      break;
    }
    return parent::get($name);
  }
  
  private function emptyRooms() {
    .....тут обрабатываем данные свойства из базы
  }
  
  public function save() {
    if($this->isExists()) {
      ...тут сохраним несколько метро
      ...Вероятно у метро есть свой класс и тд
      return parent::save();
    }
    return false;
  }
  
  ...остальные характерные функции
}
