<?php

namespace SallePW\Model;

interface TaskRepository
{
    public function save(Task $task);
}
$dsn = 'mysql:dbname=web2;host=127.0.0.1';
$usuario = 'david';
$contrase�a = '1';

try {
    $gbd = new PDO($dsn, $usuario, $contrase�a);
 echo 'se logro la conexi�n: ' . $e->getMessage();
} catch (PDOException $e) {
    echo 'Fall� la conexi�n: ' . $e->getMessage();
}

?>