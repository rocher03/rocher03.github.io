<?php

$dbhost  ="localhost";
$dbadi   ="osmanvtt";

$dbuser  ="root";

$dbpass  ="";

$baglanti=@mysql_connect($dbhost,$dbuser,$dbpass);

if (! $baglanti) die("MYSQL baglantisi saglanamadi");

@mysql_select_db($dbadi,$baglanti) or die("Veritabanına baglanti saglanamadi");

?>