<?php
session_start(); //включаем сессию

$text = $_POST['text'];

$pdo = new PDO("mysql:host=localhost;dbname=edu_marlin", "root", "root"); //имя БД edu_marlin, имя и пароль root

$sql = "SELECT * FROM task9 WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);
$task = $statement->fetch(PDO::FETCH_ASSOC); //fetch? а не fetchAll потому что нам нужна одна запись

if (!empty($task)){ //!empty($task) - не пустая переменная task
    $danger = "Введенная запись уже присутствует в таблице.";
    $_SESSION['danger'] = $danger; //записываем сообщение в сессию

    header("Location: /task_10.php");
    exit; //выходим из продолжения скрипта
}

$sql = "INSERT INTO task9 (text) VALUES(:text)";
$statement = $pdo->prepare($sql);
$statement->execute(['text' => $text]);

$success = "Запись успешно записана в таблицу.";
$_SESSION['success'] = $success; //записываем сообщение в сессию

header("Location: /task_10.php");

?>
