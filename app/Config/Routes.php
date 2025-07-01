<?php

$routes->get('/', 'Home::index'); #dari 'Main::index' menjadi 'Home::index'
$routes->match(['get', 'post'], 'tambah', 'Home::tambah'); # dari 'get', 'home/tambah' menjadi '['get', 'post']'
