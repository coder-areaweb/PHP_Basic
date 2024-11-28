<?php
session_start(); //запускаем сессию
unset($_SESSION['user_name']);
unset($_SESSION['email']);
unset($_SESSION['subject']);
unset($_SESSION['message']);
function redirect() {
    header('Location: contact.php');
    exit();
}//переадресация

$user_name = htmlspecialchars(trim($_POST['username'])); //получаем информацию предварительно удалив html-тэги
$from = htmlspecialchars(trim($_POST['email']));
$subject = htmlspecialchars(trim($_POST['subject']));
$message = htmlspecialchars(trim($_POST['message']));

$_SESSION ['user_name'] = $user_name;//поместить данные внутри сессии
$_SESSION ['email'] = $from;
$_SESSION ['subject'] = $subject;
$_SESSION ['message'] = $message;

if(strlen($user_name) <= 1) {
    $_SESSION ['error_username'] = "Enter correct name";
    redirect();
}
else if(strlen($from) <5 || strpos($from ,"@") == false) {
    $_SESSION['error_email'] = "Enter correct e-mail";
    redirect();
}
if(strlen($subject) <= 5) {
    $_SESSION['error_subject'] = "Themes minimum 5 characters";
    redirect();
}

if(strlen($message) <= 5) {
    $_SESSION['error_message'] = "Message don't 5 characters";
    redirect();
}
else {
    $_SESSION['error_username'] = "";
    $_SESSION['error_email'] = "";
    $_SESSION['error_subject'] = "";
    $_SESSION['error_message'] = "";
}