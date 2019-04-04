
<?php

$dsn = 'mysql:dbname=web2;host=127.0.0.1';
$usuario = 'david';
$contraseña = '1';

try {
    $gbd = new PDO($dsn, $usuario, $contraseña);
    echo 'Conexió exitosa: ' . $e->getMessage();
} catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add task</title>
</head>
<body>
<?php 
$sql = 'SELECT * FROM user';
    foreach ($gbd->query($sql) as $row) {
      
        $this->renderer->render('post_task', ['name' => $row['email'], 'age' =>$row['id'] ]);
        echo $name;
        echo $age;
    }


?>
    <form action="/task" method="POST">
        <input type="text" name="title" placeholder="title">
        <input type="text" name="content" placeholder="content">
        <input type="submit" value="send">
    </form>
</body>
</html>
