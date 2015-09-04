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

          // AJAX search and PAGINATION
         $('form').on('change', function(data){
          $.ajax({
            url: "admin_orders",
            method: 'post',
            data: $('#search_form').serialize()
          }).done(function(data){
            $('.table_here').html(data);
          })
          return false;      
        });
        $('.search').keyup(function(data){
          var page_num = 0;
          $('#page_number').attr('value', page_num);
          $.ajax({
            url: "admin_orders",
            method: 'post',
            data: $('#search_form').serialize()
          }).done(function(data){
            $('.table_here').html(data);
          })
          return false;
        })
        $(document).on('click', '.page_link', function(){
          var page_num = $(this).attr('value');
          console.log(page_num);
          $('#page_number').attr('value', page_num);
          $('#search_form').trigger('change');
        })
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
      <a href="" class="brand-logo">Admin Dashboard</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      	<li><a href="">Orders</a></li>
      	<li><a href="/products">Products</a></li>
        <li><a href="/logOff">Log Off</a></li>
      </ul>
    </div>
  </nav>
  <ul>
  	<li>
<!-- SEARCH BOX -->
  		<form action='admin_orders' method='post' id='search_form'>
          <div class="input-field col s6">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" name='search' class='search'>
            <input type='hidden' value='0' id='page_number' name='page_number'>
            <label for="icon_prefix">Search</label>
          </div>
        </form>
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
  <!-- start of table here -->
  <h3>Orders</h3>
  <div class='table_here'>
<?php require('partials/admin_dash_partials.php') ?>
  </div>

</body>
</html>