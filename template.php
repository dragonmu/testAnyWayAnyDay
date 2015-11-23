<?php


?>

<div class="list">
  <? foreach($houses as $house) { ?>
    <div>площадь <?=$house->getArea();?></div>
  <? } ?>
</div>
<div class="list">
  <? foreach($object as $houseorapartament) { ?>
    <div>площадь/комнат <?=$houseorapartament->getArea();?></div>
    или у каждого класса свой шаблон, хотя функцие для выбора значений одинаковые
  <? } ?>
</div>
