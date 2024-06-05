<?php
ob_start();
session_start();
require 'baglan.php';

if(isset($_POST['register']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];
   $password_again= @$_POST['password_again'];

   if(!$username)
   {
    echo "lütfen kullanıcı adını giriniz";
   }
   elseif(!$password || !$password_again)
   {
    echo "lütfen şifreyi giriniz";
   }
   elseif($password != $password_again)
   {
    echo "girdiğiniz şifreler birbirleriyle aynı değil";
   }
   else{
        //veritabani kayit
        $sorgu=$db->prepare('INSERT INTO users SET user_name=?,user_password=?');
        $ekle=$sorgu->execute([
            $username,$password
        ]);
        if($ekle)
        {
            echo "kayit başarıyla gerçekleşti, yönlendiriliyorsunuz";
            header('Location:login.php');
        }
        else{
            echo "bir hata oluştu kontrol ediniz";
        }
   }
}

if(isset ($_POST['giris']))
{
  $username=$_POST['username'];
  $password=$_POST['password'];

  if(!$username)
  {
    echo "kullanici adınızı giriniz";
}
elseif(!$password)
{
    echo "şifrenizi giriniz";
}
else{

    $kullanici_sor=$db->prepare('SELECT * FROM users WHERE user_name=? || user_password=?');

    $kullanici_sor->execute([
        $username,$password
    ]);
   $say=$kullanici_sor->rowCount();
    if($say==1){
        $_SESSION['login']=true;
        $_SESSION['username']=$username;
        echo "başarıyla giriş yaptınız".$username;
        header('Location:home.php');
    }
    else{
        echo "bir hata oluştu tek   rar kontrol ediniz";
    }
}
}
?>
