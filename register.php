<?php
require 'baglan.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş yap</title>
    <lin rel="stylesheet" type="text/css" href="style.css">
    <style><?php include "css/login.css" ?></style>
</head>
<body>
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Kayıt Ol</h1>
            </div>
            <form action="islem.php" method="post"> 
            <div class="login-form">
                <div class="control-group">
                    <input type="text" name="username" class="login-field" placeholder="Kullanıcı adı" id="login-name">
                    <label class="login-field-icon fui-user" for="login-name"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password" class="login-field" placeholder="Şifre" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>
                <div class="control-group">
                    <input type="password" name="password_again" class="login-field" placeholder="Tekrar Şifre" id="login-pass">
                    <label class="login-field-icon fui-user" for="login-pass"></label>
                </div>
                <button href="register.php"name="register" class="btn btn-primary btn-large btn-block ">Kayıt ol</button>
            </div>
            </form>
            <a href="login.php"><button name="giris" class="btn btn-primary btn-large btn-block ">Giriş Yap</button></a>
        </div>
    </div>
</body>
</html>
