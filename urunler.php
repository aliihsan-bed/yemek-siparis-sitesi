
    
  <?php include "header.php" ?>
  <?php 
    
    $products=$db->query("SELECT * from products", PDO::FETCH_OBJ)->fetchAll();
    
  ?>

    <!--! ürünler section end -->
      <section class="products">
        <h1 class="heading"><span>Ürünler</span></h1>
        <div class="box-container">
        
         
          <div class="box">
          <div class="box-head">
              <span class="title">Mini Burger</span>
               <a href="#" class="name"> Bacon Burger</a>
            </div>
            <div class="image">
              <img src="images/product-1.png" alt="">
              </div>
          
           <div class="box-bottom">
            <div class="info">
             <b class="price">130 TL</b>
             <span class="amount">90gr / 110gr</span>
            </div>
            <div class="product-btn">
             <a href="#">
               <i class="fas fa-plus"></i>
             </a>
            </div>
           </div>
            
          </div> 
          <div class="box">
            <div class="box-head">
              <span class="title">Mini Burger</span>
               <a href="#" class="name"> Bacon Burger</a>
            </div> 
            <div class="image">
              <img src="images/product-2.png" alt="">
              </div>
          
           <div class="box-bottom">
            <div class="info">
             <b class="price">130 TL</b>
             <span class="amount">90gr / 110gr</span>
            </div>
            <div class="product-btn">
             <a href="#">
               <i class="fas fa-plus"></i>
             </a>
            </div>
           </div>
            
          </div> 
          <div class="box dark-bg">
            <div class="box-head">
              <span class="title">Mini Burger</span>
               <a href="#" class="name"> Bacon Burger</a>
            </div>

            <div class="image">
              <img src="images/dark-product.jpg" alt="">
              </div>
          
           <div class="box-bottom">
            <div class="info">
             <b class="price">130 TL</b>
             <span class="amount">90gr / 110gr</span>
            </div>
            <div class="product-btn">
             <a href="#">
               <i class="fas fa-plus"></i>
             </a>
            </div>
           </div>        
          </div> 
          
        </div>        

      </section>

    <!--! ürünler section end -->


    <?php include "footer.php" ?>

 


      