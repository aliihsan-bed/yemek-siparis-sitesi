<?php 
      if(!isset($_SESSION))
      {
        session_start();
      }
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Hakkında</title>

    <link rel="stylesheet" href="style.css" />
    <style><?php include "css/style.css" ?></style>
  </head>
  <body>
    <?php require_once "lib/db.php";?>

  




    <!--! header start -->

    <header class="header">
      <a href="#" class="logo">
        <img src="images/logo.png" alt="logo" />
      </a>

      <nav class="navbar">
        <a href="home.php" >AnaSayfa</a>
        <a href="menu.php" >Menü</a>
        <a href="Urunler.php">Ürünler</a>
        <a href="contact.php">İletişim</a>
        <a href="about.php" >Hakkında</a>
  
        <?php
          if($_SESSION){
            echo "<a href='profil.php'>".$_SESSION['username']."</a>";
            echo "<a href='cikis.php'>Çıkış Yap</a>";
          }
          else{
            echo "<a href='login.php'>Giriş Yap</a>
            <a href='register.php'>Kayıt Ol</a>";
          }
        ?>
      </nav>
     

      <div class="buttons">
        <button id="search-btn">
          <i class="fas fa-search"></i>
        </button>
        <button id="cart-btn">
          <i class="fas fa-shopping-cart"></i>
        </button>
        <button id="menu-btn">
          <i class="fas fa-bars"></i>
        </button>
        <span class="badge cart-count">10</span>
      </div> 

      <div class="search-form">
        <input 
          type="text" 
          class="search-input" 
          id="search-box" 
          placeholder="search here"/>
        <i class="fas fa-search"></i>
      </div>
      <div class="cart-items-container">
        <div class="cart-item">

          <i class="fas fa-times"></i>
          <img src="images/menu-1.png" alt="menu">
          <div class="content">

            <h3> cart item 01</h3>
            <div class="price">16$</div>

          </div>

        </div>
        <div class="cart-item">

          <i class="fas fa-times"></i>
          <img src="images/menu-2.png" alt="menu">
          <div class="content">

            <h3> cart item 02</h3>
            <div class="price">17$</div>

          </div>

        </div>
        <div class="cart-item">

          <i class="fas fa-times"></i>
          <img src="images/menu-3.png" alt="menu">
          <div class="content">

            <h3> cart item 03</h3>
            <div class="price">18$</div>

          </div>

        </div>
        <div class="cart-item">

          <i class="fas fa-times"></i>
          <img src="images/menu-4.png" alt="menu">
          <div class="content">

            <h3> cart item 04</h3>
            <div class="price">19$</div>

          </div>

        </div>
        <a href="#" class="btn">checkout now</a>

      </div>

    </header>
    <!--! header end -->