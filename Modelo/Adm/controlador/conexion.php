<?php


//  $link = mysql_connect('localhost', 'ecustic_admin', 'Administrador.1');
  $link = mysql_connect('localhost', 'root', '');
    if (!$link) {
        die('no conectó: ' . mysql_error());
    }

//  mysql_select_db('ecustic_datalog', $link) or die('fallo la db.');
    mysql_select_db('ecustic', $link) or die('fallo la db.');
    mysql_query("SET NAMES 'utf8'");


