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
      $('.datepicker').pickadate({
  	    selectMonths: true, // Creates a dropdown to control month
  	    selectYears: 15, // Creates a dropdown of 15 years to control year
  	    selectDays: false
  	  });
      
  });
   </script>
   </head>
<body class='container'>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">PlaceHolder eCommerce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/cart">Shopping Cart(40)</a></li>
      </ul>
    </div>
  </nav>
  <div id='side_nav'>
  </div>
<div class="cart">
 <!-- THIS IS A DUMMY TABLE FOR TESTING, REMOVE IT BEFORE MERGING -->
  <form action="/items/add_to_cart" method='post'>
    <input type="text" name='id' placeholder="test item id">
    <input type="text" name='quantity'placeholder="test item quantity">
    <input type="submit" value="submit">
  </form>
  <!-- THIS IS WHERE REAL STUFF STARTS UP AGAIN -->
	<table class="bordered striped">
		<thead>
			<th>Item</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
		</thead>
		<tbody>
      <?php if(isset($items)){
        $total=0;
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
			<tr>
				<td>example item</td>
				<td>example price</td>
				<td>example quantity <a href="">update</a> <a href="">delete</a></td>
				<td>example total</td>
			</tr>
			
		</tbody>
	</table>
	<div class="row">
		<div class="col s4 offset-s8">
			<h5>Total: $<?=$total?></h5>
			<a href="/" class="waves-effect waves-light btn">Continue Shopping</a>
		</div>
	</div>
</div>
    <div class="row" id='shipping'>
        <h3>Shipping Information</h3>
        <form class="col s8" action='/customers/buy' method='post'>
          <div class="row">
            <div class="input-field col s4">
              <input name="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s4">
              <input name="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input name="address" type="text" class="validate">
              <label for="address">Address</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s8">
              <input name="address2" type="text" class="validate">
              <label for="address2">Address 2</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input name="city" type="text" class="validate">
              <label for="city">City</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input name="state" type="text" class="validate">
              <label for="state">State</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input name="zipcode" type="text" class="validate">
              <label for="zipcode">Zipcode</label>
            </div>
          </div>
        <!-- <h3>Billing Information</h3>
        <p>
            <input type="checkbox" name="test5" />
            <label for="test5">Same as shipping</label>
        </p> -->
      <!-- ________________________________commented out for now_______________________ -->
         <!--  <div class="row">
            <div class="input-field col s4">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s4">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Last Name</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="address" type="text" class="validate">
              <label for="address">Address</label>
            </div>
          </div>
           <div class="row">
            <div class="input-field col s8">
              <input id="address2" type="text" class="validate">
              <label for="address2">Address 2</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="city" type="text" class="validate">
              <label for="city">City</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="state" type="text" class="validate">
              <label for="state">State</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="zipcode" type="text" class="validate">
              <label for="zipcode">Zipcode</label>
            </div>
          </div> -->
          <div class="row">
            <div class="input-field col s8">
              <input id="cardnumber" type="text" class="validate">
              <label for="cardnumber">Card Number</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="securitycode" type="password" class="validate">
              <label for="securitycode">Security Code</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s4">
              <input name="month" type="text" class="validate">
              <label for="month">Month</label>
            </div>
            <div class="input-field col s4">
              <input name="year" type="text" class="validate">
              <label for="year">Year</label>
            </div>
          </div>
           <!-- <input type="date" class="datepicker"> -->
            <button class="btn waves-effect waves-light" type="submit" name="action">Buy
            <i class="material-icons">send</i>
            </button>
        </form>
    </div>
</div>
</html>
