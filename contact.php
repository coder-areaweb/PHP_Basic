<?php
session_start();
$title = "Контакты";
require "blocks/header.php";
?>
<h1 class="mt-5"><?=$title?></h1>
<form action="check_contact.php" method="post">
    <input type="text" name="username" value="<?=$_SESSION['user_name']?>" placeholder="Enter name" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_username']?></div><br>
    <input type="text" name="email" value="<?=$_SESSION['email']?>" placeholder="Enter your mail" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_email']?></div><br>
    <input type="text" name="subject" value="<?=$_SESSION['subject']?>"placeholder="Enter to subject" class="form-control">
    <div class="text-danger"><?=$_SESSION['error_subject']?></div><br>
    <textarea name="message" placeholder="Enter your message" class="form-control" value="<?=$_SESSION['message']?>"></textarea>
    <div class="text-danger"><?=$_SESSION['error_']?></div><br>
    <!--<input type="submit" value="Send" class="btn btn-success"> -->
    <button type="submit" class="btn btn-success">
        Send it!
    </button>
</form>
<?php
require_once "blocks/footer.php";
?>