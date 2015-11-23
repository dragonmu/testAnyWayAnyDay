<?php

/**
* класс дома
* функции и тд соответствуют исключительно дому
*/
class house extends objectClass implements objectInterface {
  
  
  public function __get($name) {
    switch($name) {
      case 'area':
        return $this->area();
      break;
      ...тут далее цена и тд
    }
    return parent::get($name);
  }
  
  private function area() {
    .....тут обрабатываем данные свойства из базы
  }
  
  public function save() {
    if($this->isExists()) {
      ...тут сохраним несколько шоссе
      ...Вероятно у шоссе есть свой класс и тд
      return parent::save();
    }
    return false;
  }
  ...остальные характерные функции
}
