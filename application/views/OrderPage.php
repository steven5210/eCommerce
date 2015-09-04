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
  		<li><p>Order ID : <?=$order['order_id']?></p><li>
  		<li><p>Customer shipping info:</p></li>
  		<li><p>Name: <?=$order['ship_name']?></p></li>
  		<li><p>Address: <?=$order['ship_address']?></p></li>
  		<li><p>City: <?=$order['ship_city']?></p></li>
  		<li><p>States: <?=$order['ship_state']?></p></li>
  		<li><p>Zip: <?=$order['ship_zipcode']?></p></li>
  		<li><p>Customer billing info: </p></li>
  		<li><p>Name: <?=$order['bill_name']?></p></li>
  		<li><p>City: <?=$order['bill_city']?></p></li>
  		<li><p>State: <?=$order['bill_state']?></p></li>
  		<li><p>Zip: <?=$order['bill_zipcode']?></p></li>
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
          <tr>
<!-- echo out data with a for loop here -->
<?php           foreach($orders as $order)  
                {?>
            <td><a href="/product_info/<?=$order['item_id']?>"><?=$order['item_id']?></a></td>
            <td><?=$order['category_name']?></td>
            <td><?=$order['item_price']?></td>
            <td><?=$order['quantity']?></td>
            <td>$<?=$order['total_price']?></td>
          </tr>
<?php           }?>
        </tbody>
      </table>
      <ul>
        <li><p class='border'>Status: <?=$order['status']?></p><p class='border'>Sub total: $29.98 <br>Shipping: What Math <br>Total Price: $<?=$order['total_price']?></p></li>
      </ul>
  </div>

</body>
</html>