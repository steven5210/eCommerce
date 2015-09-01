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
		<table>
			
		</table>

	</div>
	<div class="shipping">
		<h3>Shipping Information</h3>
		<form action="/products/checkout" method='post'>
			<input type="text" name='first_name'>
			<input type="text" name='last_name'>
			<input type="text" name='address'>
			<input type="text" name='address2'>
			<input type="text" name='city'>
			<input type="text" name='state'>
			<input type="text" name='zip'>
			<h3>Billing Information</h3>
			<input type="checkbox"> Same as shipping
			<input type="text" name='first_name'>
			<input type="text" name='last_name'>
			<input type="text" name='address'>
			<input type="text" name='address2'>
			<input type="text" name='city'>
			<input type="text" name='state'>
			<input type="text" name='zip'>
		</form>
		</form>
	</div>
</html>