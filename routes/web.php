<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/links', 'LinkController@index');

Route::get('/link/{id}', 'LinkController@view') ; 

/*
Route::get('/install.php', function () {
$dsn='mysql:host=localhost';
$user = 'softAdmin';
$password = 'qwertyu';

	echo "<html>";
	echo "   <head>";
	echo '      <meta charset="utf-8">';
	echo "      <TITLE>Инициализация таблиц БД</TITLE>"; 
	echo "   </head>";
	echo "   <body> ";

	try {
    	$dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
    	echo 'Подключение не удалось: ' . $e->getMessage();
	}

/* Изменение схемы базы данных и данных */
/*
	$count = 0;
	$ret = $dbh->exec("CREATE DATABASE `mytestdb`;");
	if($ret === false){
		print_r($dbh->errorInfo());
		print("\n <br> \n");
	} else {
		$count=$count+1;
	};
	$ret = $dbh->exec("CREATE TABLE `mytestdb`.`links` ( `id` INT NOT NULL , `token` INT NOT NULL , `target_url` VARCHAR(255) NOT NULL , `created_ad` DATETIME NOT NULL , `link_id` INT NOT NULL , PRIMARY KEY (`id`));");
	if($ret === false){
		print_r($dbh->errorInfo());
		print("\n <br> \n");
	} else {
		$count=$count+1;
	};
	$ret = $dbh->exec("CREATE TABLE `mytestdb`.`clicks` ( `id` INT NOT NULL , `user_id` INT NOT NULL , `link_id` INT NOT NULL , `3` DATETIME NOT NULL , PRIMARY KEY (`id`));");
	if($ret === false){
		print_r($dbh->errorInfo());
		print("\n <br> \n");
	} else {
		$count=$count+1;
	};
	$ret = $dbh->exec("CREATE TABLE `mytestdb`.`users` ( `id` INT NOT NULL , `token` INT NOT NULL , `ip` VARCHAR(15) NOT NULL , `browser` VARCHAR(64) NOT NULL , `os` VARCHAR(32) NOT NULL , `create_at` DATETIME NOT NULL , `link_id` INT NOT NULL , PRIMARY KEY (`id`));");
	if($ret === false){
		print_r($dbh->errorInfo());
		print("\n <br> \n");
	} else {
		$count=$count+1;
	};
/* Начало транзакции, отключение автоматической фиксации */
	/*$dbh->beginTransaction();*/
 
/*заполняем таблицы начальными значениями здесь*/
	/*$count = $count + $sth = $dbh->exec("UPDATE links SET token = 'hamburger'");*/

/* Распознаем ошибку и откатываем назад изменения 
это кусок кода не отменяет создание таблиц*/
/*	print("обработанно $count запроса.\n <br> \n");
	if ($count < 4) {
		/*  $dbh->rollBack();*/
/*  		echo "Error found!"; 
	} else {
		/*  $dbh->commit();*/
/*  		echo "Work Complite!"; 
	}

/* Соединение с базой данных снова в режиме автоматической фиксации */

/*	echo "   </body>"; 
	echo "</html>";
});

Route::get('/initab.php', function () {
$dsn='mysql:host=localhost db;dbname=mytestdb';
$user = 'softAdmin';
$password = 'qwertyu';

	echo "<html>";
	echo "   <head>";
	echo '      <meta charset="utf-8">';
	echo "      <TITLE>Инициализация значений таблиц БД</TITLE>"; 
	echo "   </head>";
	echo "   <body> ";

	try {
    	$dbh = new PDO($dsn, $user, $password);
	} catch (PDOException $e) {
    	echo 'Подключение не удалось: ' . $e->getMessage();
	}

/* Изменение схемы базы данных и данных */
/*	$count = 0;
	
/* Начало транзакции, отключение автоматической фиксации */
/*	$dbh->beginTransaction();
 
/*заполняем таблицы начальными значениями здесь*/
/*	$count = $count + $sth = $dbh->exec("UPDATE links SET token = '1'");
	$count = $count + $sth = $dbh->exec("UPDATE links SET target_url = 'localhost'");
	$count = $count + $sth = $dbh->exec("UPDATE links SET created_ad = '10.05.2017 14:32'");

/* Распознаем ошибку и откатываем назад изменения 
это кусок кода не отменяет создание таблиц*/
/*	print("обработанно $count запроса.\n <br> \n");
	if ($count < 3 ) {
		$dbh->rollBack();
  		echo "Error found!"; 
	} else {
	 	$dbh->commit();
  		echo "Work Complite!"; 
	}

/* Соединение с базой данных снова в режиме автоматической фиксации */
/*
	echo "   </body>"; 
	echo "</html>";
});
*/
Route::get('/index', function () {

});
Route::get('/view', function () {

});