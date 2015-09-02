<html>
<head>
	<title>OrderID Page</title>
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
       $('.modal-trigger').leanModal();
    });
   </script>
   <style>
   	.orderID {
   		border: 1px solid black;
   		width: 280px;
   		display: inline-block;
   	}
   	.main {
   		display: inline-block;
   		vertical-align: top;
   	}
    .border {
      border: 1px solid black;
    }
   </style>
</head>
<body class='container'>
	<nav>
    <div class="nav-wrapper">
      <a href="" class="brand-logo">Dashboard</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="/ordersMain">Orders</a></li>
        <li><a href="/products">Products</a></li>
        <li><a href="/logOff">Log Off</a></li>
      </ul>
    </div>
  </nav>
  <div class='orderID'>
  	<ul>
  		<li><p>Order ID : 1</p><li>
  		<li><p>Customer shipping info:</p></li>
  		<li><p>Name: Goku</p></li>
  		<li><p>Address: 123 dojo ave</p></li>
  		<li><p>City: Somewhere</p></li>
  		<li><p>States: Wa</p></li>
  		<li><p>Zip: 98171</p></li>
  		<li><p>Customer billing info: </p></li>
  		<li><p>Name: Goku</p></li>
  		<li><p>City: Seattle</p></li>
  		<li><p>State: WA</p></li>
  		<li><p>Zip: 98171</p></li>
  	</ul>

  </div>
  <div class ='main'>
  	<!-- start of table here -->
  <table class='striped'>
        <thead>
          <tr>
              <th data-field="ID">ID</th>
              <th data-field="item">Item</th>
              <th data-field="price">Price</th>
              <th data-field="quantity">Quantity</th>
              <th data-field="total">Total</th>
          </tr>
        </thead>

        <tbody>
 <!-- echo out data with a for loop here -->
          <tr>
            <td><a href="/orderPage">100</a></td>
            <td>Eclair</td>
            <td>09/1/15</td>
            <td>3554 S Somewhere St Moon, CA</td>
            <td>$99.99</td>
          </tr>
          <tr>
            <td><a href="">99</a></td>
            <td>Jellybean</td>
            <td>09/1/15</td>
            <td>9999 N MiddleOfNowhere, WA</td>
            <td>$99.99</td>
		  </td>
          </tr>
          <tr>
            <td><a href="">98</a></td>
            <td>Lollipop</td>
            <td>09/1/15</td>
            <td>38573 S Volcano, WA</td>
            <td>$99.99</td>
		  </td>
          </tr>
        </tbody>
      </table>
      <ul>
        <li><p class='border'>Status: shipped</p><p class='border'>Sub total: $29.98 <br>Shipping: 1.00 <br>Total Price: $30.95</p></li>
      </ul>
  </div>

</body>
</html>