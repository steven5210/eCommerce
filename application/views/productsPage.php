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

    // AJAX search and PAGINATION
         $('form').on('change', function(data){
          $.ajax({
            url: "admin_products",
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
            url: "admin_products",
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
      <form action='admin_products' method='post' id='search_form'>
        <div class="input-field col s6">
          <i class="material-icons prefix">search</i>
          <input id="icon_prefix" type="text" name='search' class='search'>
          <input type='hidden' value='0' id='page_number' name='page_number'>
          <label for="icon_prefix">Search</label>
        </div>
      </form>
    </li>
    <li>
    <?php 
    if($this->session->flashdata('errors')) {
      foreach($this->session->flashdata('errors') as $error) {echo $error; } 
    }?>
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
              <label for="inventory">Inventory</label>
              <input type="text" name="inventory">
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
              </div>
<!-- Add in the draggable functionality here -->
              <ul>
                <li class='button'><button id='buttonSpace' class="btn waves-effect waves-light" type="submit">Cancel</button>
                  <button id='buttonSpace' class="btn waves-effect waves-light" type="submit">Preview</button>
                  <button class="btn waves-effect waves-light" type="submit">Add Product</button>
                </li>
              </ul>
            </form>​
          </div>
        </div>
      </li>
      <!-- Modal Trigger -->
  <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Add New Product</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Add a new product</h4>
      <form class='updateForm' action="/notes/update" method='post'>​
          <input type="hidden" name='id' value=''>​
          <div class="input-field col s12">
            <textarea name='description' class="note_box"></textarea>
          </div>
        </form>​
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
    </div>
  </div>
    </li>
  </ul>
<div class='table_here'>
<?php     require('partials/admin_partials.php')        ?>
</div>   

</html>