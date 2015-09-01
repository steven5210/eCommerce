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
        <li><a href="collapsible.html">Shopping Cart(40)</a></li>
      </ul>
    </div>
  </nav>
  <div id='side_nav'>
  </div>
<div class="cart">
	<table class="bordered striped">
		<thead>
			<th>Item</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Total</th>
		</thead>
		<tbody>
			<tr>
				<td>example item</td>
				<td>example price</td>
				<td>example quantity</td>
				<td>example total</td>
			</tr>
			<tr>
				<td>example item</td>
				<td>example price</td>
				<td>example quantity</td>
				<td>example total</td>
			</tr>
			<tr>
				<td>example item</td>
				<td>example price</td>
				<td>example quantity</td>
				<td>example total</td>
			</tr>
		</tbody>
	</table>
	<div class="row">
		<div class="col s4 offset-s8">
			<h5>Total: $4000000.00</h5>
			<a class="waves-effect waves-light btn">Continue Shopping</a>
		</div>
	</div>
</div>
    <div class="row" id='shipping'>
        <h3>Shipping Information</h3>
        <form class="col s8" action='items/checkout' method='post'>
          <div class="row">
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
          </div>
        <h3>Billing Information</h3>
        <p>
            <input type="checkbox" id="test5" />
            <label for="test5">Same as shipping</label>
        </p>
      <!-- ________________________________commented out for now_______________________ -->
          <!-- <div class="row">
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
          </div>
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
          </div> -->
           <!-- <input type="date" class="datepicker"> -->
            <button class="btn waves-effect waves-light" type="submit" name="action">Buy
            <i class="material-icons">send</i>
            </button>
        </form>
    </div>
</div>
</html>
