<?php

/*
  $dbhost = 'localhost';
  $dbuser = 'colegiol_usuario';
  $dbpass = 'Uq@xF^ymP3E';
  $dbname = 'colegiol_ensenanza';
  $conn = mysql_connect($dbhost,$dbuser,$dbpass)
  or die('Error connecting to Mysql');
  mysql_select_db($dbname);
 */

$link = mysql_connect('localhost', 'colegiol_usuario', 'Uq@xF^ymP3E');
// $link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('no conectó: ' . mysql_error());
}

mysql_select_db('colegiol_admisiones', $link) or die('fallo la db.');
//    mysql_select_db('colegio', $link) or die('fallo la db.');
mysql_query("SET NAMES 'utf8'");


