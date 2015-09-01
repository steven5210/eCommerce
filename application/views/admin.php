<html>
<head>
	<title>Admin Login Page</title>
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
   	.adminTitle {
   		text-align: center;
   		color: teal;
   	}
   	.row {
   		width: 250px;
   	}
   </style>
</head>
<body class='container'>
	<h4 class='adminTitle'>Admin Login Page</h4>
		<form action='/admin_login' method='post'>
			<div class="row">
		        <div class="input-field col s12">
		          <input id="email" type="email" class="validate" name='email'>
		          <label for="email">Email</label>
		        </div>
		      </div>
			<div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" class="validate" name='password'>
		          <label for="password">Password</label>
		        </div>
		      </div>
		      <button class="btn waves-effect waves-light" type="submit">Login<i class="material-icons">input</i></button>
	    </form>
</body>
</html>