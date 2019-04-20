<?php

$value = "World";

$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');

$query = $db->query('SELECT * FROM dockerSample');
if($query !== false) {
    $databaseTest = $query->fetchAll(PDO::FETCH_OBJ);
} else {
	die('Oops.. something error!');
}

?>

<html>
    <body>
        <h1>Hello, <?= $value ?>!</h1>

        <?php foreach($databaseTest as $row): ?>
            <p>Hello, <?= $row->name ?></p>
        <?php endforeach; ?>
    </body>
</html>