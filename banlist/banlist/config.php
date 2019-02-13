<?php
/*

		ИНФОРМАЦИЯ:
			Банлист v1.1.0 UTF-8
			Автор: GamerVII
			Страница ВК: http://vk.com/gamervii

		ВНИМАНИЕ!
			Если данный файл не является конфигурационным, то при отсутствии у Вас знаний и навыков
			программирования на языке PHP любое Ваше здесь изменение может привести к нестабильной работе банлиста.
			Редактируйте данный код только при указании тех. поддержки, оказываемой автором данного скрипта!

		По любым вопросам обращайтесь к автору данного кода http://vk.com/gamervii или в беседу ВК https://vk.me/join/AJQ1dzFlXwzCO9cs6CAwTvmw


*/

// Подключение к базе данных
$driver 	=  'mysql';                      //  Тип базы, если не знаете зачем это, не трогайте!
$host   	=  'localhost';                  //  Сервер
$db_name	=  '';               						 //  Имя базы данных
$db_user	=  '';          						     //  Пользователь базы данных
$db_pass	=  '';      									   //  Пароль пользователя
$charset	=  'utf8';                       //  Кодировка utf8 или win1251
$db_table =  'banlist';                    //Таблица с заблокированными пользователями
$options 	=  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

// Проверка достоверности данных
try {
  $pdo = new PDO("$driver:host=$host;dbname=$db_name;charset=$charset", $db_user, $db_pass, $options);
} catch (PDOException $e) {
  die("Ошибка в подключении к базе данных. Проверьте правильность введённых вами данных");
}

#	Дополнительные настройки для банлиста
$table_width = '100%'; #	По умолчанию оставлять 100%, но если у блока есть определённая ширина, установите её
$table_padding = '15px';	#	По умолчанию оставлять 15px, но если отображение некорректно, уменьшите значение, или вовьсе поставьте 0

#	Настрока цветов в банлисте(Все цвета указывать в HEX или rgb формате):
$perm_color       = '#dc3545';	#	Цвет текста при перманентном бане
$table_background = '#fff';		#	Цвет таблицы
$table_color      = '#000';		#	Цвет текста таблицы
