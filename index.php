<?php

require 'partials/nav.php';

$connString = 'mysql:host=localhost:3306;dbname=todos';

$db = new PDO($connString, 'root');

$result = $db->prepare('SELECT * FROM todos'); // PDOStatement
$result->execute();

$rows = $result->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['todo'])) {
    createTodo($_POST['todo'], $db);
}

require 'views/index.view.php';
require 'partials/footer.php';

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function createTodo(string $value, PDO $db)
{
    $result = $db->prepare("INSERT INTO todos (title) VALUES (?)");  
    $result->execute([$value]);
}