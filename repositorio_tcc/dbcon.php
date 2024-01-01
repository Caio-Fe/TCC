<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'repositorio_tccs';

$con = new mysqli($host, $user, $password, $database);

if ($con->connect_error) {
    exit('Falha na conexão: '.$con->connect_error);
}
