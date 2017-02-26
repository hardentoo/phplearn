<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<title>PHP Learn 005</title> <!-- Делать title c помощью PHP из имени файла рег выражением -->
</head>
<body>
	<?php 
    //Объявляем константы
    define("NAME","hardentoo");
    const LAST_NAME = "bsd";
    //выводим данные
    echo "Имя: ".NAME."<br>Фамилия: ".LAST_NAME;
    ?>
</body>
</html>