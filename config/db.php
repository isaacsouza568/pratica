<?php  
//isso aqui conecta com o banco de dados do mysql
$host = 'localhost'; // servidor (normalmente localhost)
$user = 'root'; // usuario do mysql
$pass = ''; //senha (no localhosr, normalmente vazia
$db = 'login_tutorial'; //nome do banco de dados

$conn = new mysqli($host, $user, $pass, $db); //cria conexâo

if ($conn->connect_error) {// verifica se houve erro
die("falha na conexâo: " . $conn->connect_error); //exibe erro e para tudo



}

?>