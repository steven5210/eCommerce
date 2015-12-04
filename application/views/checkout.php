<?php require_once('config.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>View Cart</title>
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
      $('#test5').change(function(){
        $('.billinginfo').slideToggle();
      })
      $('form').submit(function(){

        if($('#test5').is(':checked')){
            $('#bill_first_name').val($('#first_name').val());
            $('#bill_last_name').val($('#last_name').val());
            $('#bill_address').val($('#address').val());
            $('#bill_address2').val($('#address2').val());
            $('#bill_city').val($('#city').val());
            $('#bill_state').val($('#state').val());
            $('#bill_zipcode').val($('#zipcode').val());
         } else { 
            //Clear on uncheck
          $('#bill_first_name').val("");
          $('#bill_last_name').val("");
          $('#bill_address').val("");
          $('#bill_address2').val("");
          $('#bill_city').val("");
          $('#bill_state').val("");
          $('#bill_zipcode').val("");
        };
      })  
  });
   </script>
   </head>
<body class='container'>
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">PlaceHolder eCommerce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/cart">Shopping Cart(<?=array_sum($this->session->userdata('cart'))?>)</a></li>
      </ul>
    </div>
  </nav>
  <div id='side_nav'>
  </div>
<div class="cart">
 <!-- THIS IS A DUMMY TABLE FOR TESTING, REMOVE IT BEFORE MERGING TO MASTER -->
  <!-- <form action="/items/update_cart_quantity" method='post'> -->
<!--   <form action="/items/add_to_cart" method='post'>
    <input type="text" name='id' placeholder="test item id">
    <input type="text" name='quantity'placeholder="test item quantity">
    <input type="submit" value="submit">
  </form> -->
  <!-- THIS IS WHERE REAL STUFF STARTS UP AGAIN -->
	<table class="bordered striped">
		<thead>
			<th>Item</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
		</thead>
		<tbody>
      <?php 
      $total=0;  
      if(isset($items)){
        foreach ($items as $item) { 
          $total+= $item['total']?>
        <tr>
          <td><?=$item['name']?></td>
          <td><?=$item['price']?></td>
          <td>
            <form action="/items/update_cart_quantity" method="post">
              <input type="hidden" name='id' value='<?=$item['id'] ?>'>
              <input type="text" name="quantity" value="<?=$item['quantity']?>">
              <input type="submit" value="update">
            </form>
            <a href="/items/remove/<?=$item['id'] ?>">delete</a>
          </td>
          <td><?=$item['total']?></td>
        </tr>
<?php   } 
      }?>
		</tbody>
	</table>
	<div class="row">
		<div class="col s4 offset-s8">
			<h5>Total: $<?=$total?></h5>
      <a href="/items/empty_cart">Clear Cart</a>
			<a href="/" class="waves-effect waves-light btn">Continue Shopping</a>
		</div>
	</div>
</div>
    <div class="row" id='shipping'>
      <?= $this->session->flashdata('errors') ?>
        <h3>Shipping Information</h3>
        <form class="col s8" action='/customers/buy' method='post'>
          <input type="hidden" name="total_price" value="<?=$total?>">
          <div class="row">
            <div class="input-field col s4">
              <input id="first_name" name="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s4">
              <input id="last_name" name="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="address" name="address" type="text" class="validate">
              <label for="address">Address</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s8">
              <input id="address2" name="address2" type="text" class="validate">
              <label for="address2">Address 2</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id='city' name="city" type="text" class="validate">
              <label for="city">City</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="state" name="state" type="text" class="validate">
              <label for="state">State</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="zipcode" name="zipcode" type="text" class="validate">
              <label for="zipcode">Zipcode</label>
            </div>
          </div>
        <h3>Billing Information</h3>
        <p>
          <input type="checkbox" id="test5"/>
          <label for="test5">Same as shipping</label>
        </p>
      <!-- BILLING INFORMATION -->
          <div class="row billinginfo">
            <div class="input-field col s4">
              <input id="bill_first_name" name="bill_first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s4">
              <input id="bill_last_name" name="bill_last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row billinginfo">
            <div class="input-field col s8">
              <input id="bill_address" name="bill_address" type="text" class="validate">
              <label for="address">Address</label>
            </div>
          </div>
           <div class="row billinginfo">
            <div class="input-field col s8">
              <input id="bill_address2" name="address2" type="text" class="validate">
              <label for="address2">Address 2</label>
            </div>
          </div>
          <div class="row billinginfo">
            <div class="input-field col s8">
              <input id='bill_city' name="bill_city" type="text" class="validate">
              <label for="city">City</label>
            </div>
          </div>
          <div class="row billinginfo">
            <div class="input-field col s8">
              <input id="bill_state" name="bill_state" type="text" class="validate">
              <label for="state">State</label>
            </div>
          </div>
          <div class="row billinginfo">
            <div class="input-field col s8">
              <input id="bill_zipcode" name="bill_zipcode" type="text" class="validate">
              <label for="zipcode">Zipcode</label>
            </div>
          </div>

          <!-- START CREDIT CARD INFORMATION -->
          <div class="row">
            <div class="input-field col s8">
              <input name="cardnumber" type="text" class="validate">
              <label for="cardnumber">Card Number</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input name="securitycode" type="password" class="validate">
              <label for="securitycode">Security Code</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s4">
              <input name="month" type="number" min='1' max='12' class="validate">
              <label for="month">Month</label>
            </div>
            <div class="input-field col s4">
              <input name="year" type="number" min='2015' max='2025' class="validate">
              <label for="year">Year</label>
            </div>
          </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Buy
            <i class="material-icons">send</i>
            </button>
        </form>
    </div>
  <div>
    <form action="charge" method="post">
      <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
              data-key="<?php echo $stripe['publishable_key']; ?>"
              data-description="Access for a year"
              data-amount="5000"
              data-locale="auto">
      </script>
    </form>
  </div>
</div>
</html>
