<html>
<head>
	<title>Admin Dashboard</title>
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
   	.show_all{
   		width: 9%;
   		display: inline-block;
   	}
   	.pagination{
   		margin-left: 29%;
   	}
   </style>
</head>
<body class='container'>
	<nav>
    <div class="nav-wrapper">
      <a href="" class="brand-logo">Dashboard</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href="">Orders</a></li>
      	<li><a href="">Products</a></li>
        <li><a href="/logOff">Log Off</a></li>
      </ul>
    </div>
  </nav>
  <ul>
  	<li>
		<div class="input-field col s6">
	         <i class="material-icons prefix">search</i>
	         <input id="icon_prefix" type="text" class="validate">
	         <label for="icon_prefix">Search</label>
		</div>
    </li>
    <li class='show_all'>
    	<div class="input-field col s12">
    		<select>
		      <option value="" disabled selected>Show All</option>
		      <option value="1">Orders in Process</option>
		      <option value="2">Shipped</option>
		      <option value="3">Cancelled</option>
		    </select>
  		</div>
    </li>
  </ul>
  <table class='striped'>
        <thead>
          <tr>
              <th data-field="orderID">Order ID</th>
              <th data-field="name">Name</th>
              <th data-field="date">Date</th>
              <th data-field="bill_add">Billing Address</th>
              <th data-field="total">Total</th>
              <th data-field="status">Status</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td><a href="">100</a></td>
            <td>Eclair</td>
            <td>09/1/15</td>
            <td>3554 S Somewhere St Moon, CA</td>
            <td>$99.99</td>
            <td><!-- Dropdown Trigger -->
				  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Status</a>

				  <!-- Dropdown Structure -->
				  <ul id='dropdown1' class='dropdown-content'>
				    <li><a href="#!">Order In Process</a></li>
				    <li><a href="#!">Shipped</a></li>
				    <li class="divider"></li>
				    <li><a href="#!">Cancelled</a></li>
				  </ul>
		  </td>
          </tr>
          <tr>
            <td><a href="">99</a></td>
            <td>Jellybean</td>
            <td>09/1/15</td>
            <td>9999 N MiddleOfNowhere, WA</td>
            <td>$99.99</td>
            <td><!-- Dropdown Trigger -->
				  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Status</a>

				  <!-- Dropdown Structure -->
				  <ul id='dropdown1' class='dropdown-content'>
				    <li><a href="#!">Order In Process</a></li>
				    <li><a href="#!">Shipped</a></li>
				    <li class="divider"></li>
				    <li><a href="#!">Cancelled</a></li>
				  </ul>
		  </td>
          </tr>
          <tr>
            <td><a href="">98</a></td>
            <td>Lollipop</td>
            <td>09/1/15</td>
            <td>38573 S Volcano, WA</td>
            <td>$99.99</td>
            <td><!-- Dropdown Trigger -->
				  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Status</a>

				  <!-- Dropdown Structure -->
				  <ul id='dropdown1' class='dropdown-content'>
				    <li><a href="#!">Order In Process</a></li>
				    <li><a href="#!">Shipped</a></li>
				    <li class="divider"></li>
				    <li><a href="#!">Cancelled</a></li>
				  </ul>
		  </td>
          </tr>
        </tbody>
      </table>
    <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>

</body>
</html>