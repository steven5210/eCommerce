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
       <!-- Google fonts -->
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
      <script type="text/javascript">
    $(document).ready(function() {
      $('select').material_select();
  	});
   </script>
   <style>
       body {
      background-image: url("./assets/images/wooden-color-background.jpg");
    }
   	.adminTitle {
   		text-align: center;
   		color: white;
      margin-right: 370px;
      font-family: 'Pacifico';
   	}
   	.row {
   		width: 250px;
   	}
    .nav-wrapper {
      background-color: black;
      padding-left: 20px;
    }
    .brand-logo {
    margin-left: 30px;
    font-family: 'Pacifico', cursive;
    text-align: center;
    }
    h5 {
      color: white;
    }
    p {
      color: white;
    }
    #input-label {
      color: white;
    }
    .row {
      margin-top: 40px;
      margin-bottom: 0px;
    }
    #email {
      color: white;
      margin-bottom: 0px;
    }
    #password {
      color: white;
    }
   </style>
</head>
<body class='container'>
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">iStock</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><h4 class='adminTitle'>Admin Login Page</h4></li>
      </ul>
    </div>
  </nav>
    <?= $this->session->flashdata('error') ?>
		<form action='/admin_login' method='post'>
			<div class="row">
		        <div class="input-field col s12">
		          <input id="email" type="email" class="validate" name='email'>
		          <label id='input-label' for="email">Email</label>
		        </div>
		      </div>
			<div class="row">
		        <div class="input-field col s12">
		          <input id="password" type="password" class="validate" name='password'>
		          <label id='input-label' for="password">Password</label>
		        </div>
		      </div>
		      <button class="btn waves-effect waves-light" type="submit">Login<i class="material-icons">input</i></button>
	    </form>
      <h5>Credentials for Admin Side</h5>
      <p>Email: a@a.com</p>
      <p>Password: a</p>
</body>
</html>