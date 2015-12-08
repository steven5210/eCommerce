<!DOCTYPE html>
<html>
  <head>
    <title>Place searches</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
  });
   </script>
   <style>    
    .nav-wrapper {
      background-color: black;
      padding-left: 20px;
   }
    .shopping-cart {
      padding-right: 20px;
    }
    .main_content {
      padding-left: 20px;
    }
   .image_size{
    width: 27%;
   }
   .mini_image{
    width: 5%;
    margin-right: 5px;
   }
   .description{
    display: inline-block;
    vertical-align: top;
    margin-left: 50px;
    width: 500px;
    font-size: 18px;
    margin-top: 0px;
   }
   .mini_image2{
    width: 10%;
    margin-right: 20px;
   }
   .select-wrapper {
    width: 95px;
    display: inline-block;
    }
    .price {
      font-size: 19px;
      color: red;
    }
    .buyDiv{
      display: inline-block;
      width: 10%;
    }
    .product_name {
      padding-left: 18px;
      text-align: center;
    }
    .stock {
      font-size: 19px;
      color: green;
    }
    li{
      display: inline-block;
      margin-left: 10px;
      padding-left: 10px;
    }
   </style>

   </head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">PlaceHolder eCommerce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        <!-- Shopping Cart item count -->
<?php        if($this->session->userdata('cart')) {   ?>
        <li class='shopping-cart'><a href="/cart">Shopping Cart(<?=array_sum($this->session->userdata('cart'))?>)</a></li>
          <?php         }?>
      </ul>
    </div>
  </nav>
  <!-- Product Echo -->

  <div class='main_content'> 
    <h3 class='product_name'><?=$get_product['name']?></h3>
    <ul>
      <li><img class='image_size' src="../assets/images/image1.jpg"><p>List Price: <span class='price'>$<?=$get_product['price']?></span></p>
        <li><p class='stock'>In Stock.</p></li>
          <li><p class='description'><?=$get_product['description']?></p></li>
          </li>
      <li><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"></li>
      <li><p>List Price: <span class='price'>$<?=$get_product['price']?></span></p>
          <p class='stock'>In Stock.</p>
      </li>
    </ul>
    <div class='buyDiv'>
      <!-- ADD in quantity function to shopping cart? -->
      <form action="/add_cart" method='post'>​
          <div class="input-field col s6">
           <input name='id' type='hidden' value="<?=$get_product['id']?>">
             <input id="quantity" type="text" name='quantity'>
            <label for="quantity">Quantity</label>
          </div>
    </div>
        <input type='submit' class="btn" onclick="Materialize.toast('Item added to the cart!', 4000)" value="Add to Cart">
    </div>  
      </form>
    <ul>
      <?php foreach($items as $item){
          if($item['category_name']==$get_product['category'] && $item['id']!==$get_product['id']){ ?>
        <li><a href='/product_info/<?=$item['id']?>'><img class='mini_image' src="<?= $item['image']?>"></a> <br><?=$item['name']?></li>
        <?php }
      } ?>
    </ul>

  </div>
</body>
</html>