<?php
$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=edu_marlin","root", "root"); //имя БД edu_marlin, имя и пароль root
$sql = "INSERT INTO task9 (text) VALUES(:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

header("Location: /task_9.php");
?>
