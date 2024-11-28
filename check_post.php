<?php
//print_r($_POST); //вывод всего ассоциативного массива
//другой способ чере зпеременные
$name = $_POST ['Имя_пользователя'];
$email = $_POST ['Почта'];
$pass = $_POST ['Пароль'];
if (trim($name) == "")
    echo "Вы не ввели имя пользователя:";
    else if (strlen(trim($name)) <= 2 )
        echo "Такого имени не существует:";
if (trim($email) == "")
    echo "Вы не ввели свою почту:";
else if (trim($email) == "" || trim($pass) == "" )
        echo "Почта имени выдуманная:";
           else {
   // $pass = sha1($pass); устанавливаем хэширование на переменную
               $_POST ['Пароль'] = md5($pass);
   /// echo "<h1>Все данные</h1><p>$name</p><p>$email</p>";
               #выводить также можно через цикл
               echo "<h1>Все данные</h1>";
               foreach ($_POST as $key => $value)
                   echo "<p>$value</p>";
               #Переадресация пользователя на другую страницу
             //  header('Location: http://www.google.ru/');
               //    header('Location: /about.php');
               //exit;
           }


?>