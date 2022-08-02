<?php

// Nunca envie suas credenciais para qualquer tipo de repositórios, dev sempre use autenticação em 2 fatores 
// em tudo que você possa colocar, fique atualizando suas seguranças

// host
$host = 'http://localhost:8081/crudphp/';

// db
$db_name = 'crud';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

try {
  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
} catch (\Throwable $th) {
  throw $th;
}
