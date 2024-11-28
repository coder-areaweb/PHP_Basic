<?php
$title = "For us";
require "blocks/header.php";
?>
    <div class="container mt-2">
<h1>О нас</h1>
<!--<form action="check_post.php" method="post">-->
        <form action="check_get.php" method="get">
    <input type="text" name="Имя пользователя" placeholder="Веедите имя" class="form-control"><br>
    <input type="email" name="Почта" placeholder="Укажите свою почту" class="form-control"><br>
    <input type="password" name="Пароль" placeholder="Укажите пароль" class="form-control"><br>
    <textarea name="Сообщение" placeholder="Введите сообщение" class="form-control"></textarea>
    <input type="submit" value="Отправить" class="btn btn-success">
</form>
    </div>
<?php
require "blocks/footer.php";
?>

