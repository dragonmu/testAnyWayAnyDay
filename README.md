# testAnyWayAnyDay
Структура базы
objects

| id | name | type | area |... другие поля
objects_metro

| id_object | id_metro | ... у метро есть своя таблица с активными на данные момент станциями и тд
objects_highway 

| id_object | id_highway | ... у шоссе тоже самое, с активностью датой ремонтов и тд

# выбор всех станций метро к обьекту

`select * from metro left join objects_metro on id=id_metro where id_object = номер объекта and active = 1`
и тд

# index.php это некий контроллер
# template.php это некий шаблон
# классы уже подключены автолоадом
