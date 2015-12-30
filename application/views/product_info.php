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
  <!-- Google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
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
   body {
      background-image: url("/assets/images/wooden-color-background.jpg");
      color: white;
    } 
    .shopping-cart {
      padding-right: 20px;
    }
    #main_content {
      padding-left: 10%;

      width: 90%;
    }
   .image_size{
    width: 70%;
    display: block;
   }
   .mini_image{
    width: 15%;
    margin-right: 5px;
   }
   .description{
    display: inline-block;
    vertical-align: top;
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

    .product_name {
      padding-left: 18px;
      font-family: 'Pacifico', cursive;
      
    }
      #product_purchase {
        margin-top: 10px; 
        margin-left: 10px;
        vertical-align: top;
        display: inline-block;
        padding: 5px;
        height: 300px;
        width: 200px;
        background-color: white;
        border-radius: 4px;
      }
      #image_view {
        display: inline-block;
      }
      #image_ul {
        display:block;
        width: 500px;
      }
      #product_description {
        display: inline-block;
        width: 300px;
        height: 250px;
        background-color: white;
        vertical-align: top;
        color: black;
        border-radius: 4px;
        padding-top: 10px;
        margin-top: 10px;
      }
        #product_description h5 {
          border-bottom: 2px solid black;
        }
    .stock {
      font-size: 19px;
      color: green;
    }
    .brand-logo {
      margin-left: 30px;
      font-family: 'Pacifico', cursive;
      text-align: center;
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
      <a href="/" class="brand-logo">iStock</a>
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

  <div id='main_content'> 
    <h3 class='product_name'><?=$get_product['name']?></h3>

    <div id="image_view">
      <ul id="image_ul">
        <li><img class='image_size' src="../assets/images/image1.jpg"></li>
        <li><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"></li>
      </ul>
    </div>

    <div id="product_description">
      <h5>Description</h5>
      <p class='description'><?=$get_product['description']?></p>
    </div>

    <div id="product_purchase" class='buyDiv'>     
      <p>List Price: <span class='price'>$<?=$get_product['price']?></span></p>
      <p class='stock'>In Stock.</p>
      <!-- ADD in quantity function to shopping cart? -->
      <form action="/add_cart" method='post'>​
        <div class="input-field col s6">
          <input name='id' type='hidden' value="<?=$get_product['id']?>">
          <input id="quantity" type="text" name='quantity'>
          <label for="quantity">Quantity</label>
        </div>
        <input type='submit' class="btn" onclick="Materialize.toast('Item added to the cart!', 4000)" value="Add to Cart">
      </form>
      
    </div>
        
  
      
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