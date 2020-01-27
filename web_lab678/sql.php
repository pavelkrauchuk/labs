<?php
session_start();

$host = '127.0.0.1';
$db = 'labs';
$user = 'root';
$password = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$pdo = new PDO($dsn, $user, $password);

if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['login']) && isset($_POST['password']) &&
isset($_POST['phone']) && isset($_POST['mail'])){
    $query = $pdo->query("INSERT INTO `web_lab678` (name, surname, login, password, phone, mail) VALUES 
('$_POST[name]', '$_POST[surname]', '$_POST[login]', '$_POST[password]', '$_POST[phone]', '$_POST[mail]')");
    header('Location: index.php');
} else if (isset($_POST['login']) && isset($_POST['password'])){
    $query = $pdo->prepare('SELECT `id`, `name`, `surname`, `login`, `password`, `phone`, `mail` FROM `web_lab678` 
WHERE `login` = :login AND `password` = :password');
    $query->execute(array('login' => $_POST['login'], 'password' => $_POST['password']));
    $numOfRows = $query->rowCount();
        if ($numOfRows == 0){
            echo "Неправильные логин и пароль";
        } else {
            session_start();
            $row = $query->fetch(PDO::FETCH_ASSOC);
            $_SESSION['name'] = $row['name'];
            $_SESSION['surname'] = $row['surname'];
            $_SESSION['login'] = $row['login'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['phone'] = $row['phone'];
            $_SESSION['mail'] = $row['mail'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['security'] = 126115;
            header('Location: content.php');
        }
} else if (isset($_POST['id'])){
    $query = $pdo->query("DELETE FROM `web_lab678` WHERE `id` = '$_POST[id]'");
    session_destroy();
    header("Location: index.php");
}