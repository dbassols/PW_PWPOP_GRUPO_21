<?php

namespace SallePW\Model;

interface TaskRepository
{
    public function save(Task $task);
}
$dsn = 'mysql:dbname=web2;host=127.0.0.1';
$usuario = 'david';
$contraseña = '1';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
 echo 'se logro la conexión: ' . $e->getMessage();
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}

?>