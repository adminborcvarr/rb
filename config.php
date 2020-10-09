<?php
/*
*
* Veritabanı bağlantısı için
* gerekli bağlantı bilgilerinin
* bulunduğu ayar dosyası.
*
*/

session_start();
header('Content-Type: text/html; Charset=UTF-8');
date_default_timezone_set('Europe/Istanbul');

define('MYSQL_HOST',	'localhost');
define('MYSQL_DB',	'id14943509_dbb');
define('MYSQL_USER',	'id14943509_uye');
define('MYSQL_PASS',	'sanane123456/A');

include 'db.php';
