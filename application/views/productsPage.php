<html>
<head>
  <title>Products Dashboard</title>
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
   .pagination{
      margin-left: 29%;
    }
    .mini_image{
    width: 15%;
   }
   .button {
    margin-top: 10px; 
   }
   #buttonSpace {
    margin-right: 10px;
   }
   .delete_style {
    margin-left: 10px;
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

  <ul>
    <li>
    <div class="input-field col s6">
           <i class="material-icons prefix">search</i>
           <input id="icon_prefix" type="text" class="validate">
           <label for="icon_prefix">Search</label>
    </div>
    </li>
    <li>
      <?php 
      if($this->session->flashdata('errors'))
      {
      foreach($this->session->flashdata('errors') as $error) {
        echo $error; }
      }?>
      <!-- Modal Trigger for new product-->
  <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Add New Product</a>

  <!-- Modal Structure for new product -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Add a new product</h4>
      <form action="add_product" method='post' enctype="multipart/form-data">​
         <label for="name">Name</label>
         <input id="name" type="text" name='name'>
          <input type="hidden" name='id' value=''>​
          <label for='description'>Description</label>
            <textarea name='description'></textarea>
            <label for="name">Price</label>
            <input id="price" type="text" name='price'>
            <select name='category'>
              <option value="" disabled selected>Categories</option>
              <option value="tshirt">T-Shirt</option>
              <option value="cup">Cup</option>
              <option value="hat">Hat</option>
            </select>
         <input id="category" type="text" name='new_category' placeholder='Add a new Category'>
        <div class="btn">
          <span>Image</span>

          <input type="file" name="userfile">


    <!-- Add in the draggable functionality here -->
        </div>
      <ul>
        <li class='button'><button id='buttonSpace' class="btn waves-effect waves-light" type="submit">Cancel</button>
          <button id='buttonSpace' class="btn waves-effect waves-light" type="submit">Preview</button>
          <button class="btn waves-effect waves-light" type="submit">Add Product</button></li>
      </ul>
    </form>​
      
  </div>
    </li>
  </ul>

  <!-- start of table here -->
  <table class='striped'>
        <thead>
          <tr>
              <th data-field="picture">Picture</th>
              <th data-field="ID">ID</th>
              <th data-field="name">Name</th>
              <th data-field="inventoryCount">Inventory Count</th>
              <th data-field="quantitySold">Quantity Sold</th>
              <th data-field="action">Action</th>
          </tr>
        </thead>

        <tbody>
 <!-- echo out data with a for loop here -->
 <?php         foreach($products as $product) {         ?>
          <tr>
            <td><img class='mini_image' src="../assets/images/image1.jpg"></td>
            <td><?=$product['id']?></td>
            <td><?=$product['name']?></td>
            <td>3554 S Somewhere St Moon, CA</td>
            <td>$99.99</td>
            <td><ul>
              <!-- Modal Trigger for new product-->
              <li>
  <a class="modal-trigger" href="#modal2">Edit</a><a class='delete_style' href="">Delete</a></li>
              </ul>
  <!-- Modal Structure for new product -->
  <div id="modal2" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Edit Product</h4>
      <form action="update_product" method='post'>​
         <label for="name">Name</label>
         <input id="name" type="text" name='name' placeholder=''>
          <input type="hidden" name='id' value=''>​
          <label for='description'>Description</label>
            <textarea name='description'></textarea>
            <label for="name">Price</label>
            <input id="price" type="text" name='price'>
            <select name='category'>
              <option value="" disabled selected>Categories</option>
              <option value="tshirt">T-Shirt</option>
              <option value="cup">Cup</option>
              <option value="hat">Hat</option>
            </select>
         <input id="category" type="text" name='new_category' placeholder='Add a new Category'>
        <div class="btn">
          <span>Image</span>
         <input type="file" name="image">
    <!-- Add in the draggable functionality here -->
        </div>
      <ul>
        <li class='button'><button id='buttonSpace' class="btn waves-effect waves-light" type="submit">Cancel</button>
          <button id='buttonSpace' class="btn waves-effect waves-light" type="submit">Preview</button>
          <button class="btn waves-effect waves-light" type="submit">Add Product</button></li>
      </ul>
      </form>​
      <?php } ?>
  </div>
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