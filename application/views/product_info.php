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
      font-size: 25px;
      color: red;
    }
    .buyDiv{
      display: inline-block;
      width: 10%;
    }
   </style>

   </head>
<body class='container'>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">PlaceHolder eCommerce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/index">Home</a></li>
        <!-- Shopping Cart item count -->
<?php        if($this->session->userdata('cart')) {   ?>
        <li><a href="/cart">Shopping Cart(
          <?=array_sum($this->session->userdata('cart'))?>)</a></li>
          <?php         }?>
      </ul>
    </div>
  </nav>
  <!-- Product Echo -->
  <h3><?=$get_product['name']?></h3>
  <ul>
    <li><img class='image_size' src="../assets/images/image1.jpg"><p class='description'><?=$get_product['description']?></p></li>
    <li><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"><img class='mini_image' src="../assets/images/image1.jpg"></li>
    <li><p class='price'>$<?=$get_product['price']?></p></li>
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
      <input type='submit' class="btn" onclick="Materialize.toast('Item added to the cart!', 4000)" value="Buy!">
  </div>  
    </form>
  <h4>Similar Items</h4>
  <ul>
    <li><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"><img class='mini_image2' src="../assets/images/image1.jpg"></li>
  </ul>

</body>
</html>