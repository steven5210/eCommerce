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
    $(document).ready(function() 
        {

          $('select').material_select();

      // AJAX search and PAGINATION and Sort_by
              //sort_by Ajax
              $('#sort_by').on('change', function(data){
              $.ajax({
                url: "sort_by",
                method: 'post',
                data: $('#sort_by').serialize()
              }).done(function(data){
                $('.table_here').html(data);
              })
              return false;      
            });


             $('#search_form').on('change', function(data){
              $.ajax({
                url: "index_partials",
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
                url: "index_partials",
                method: 'post',
                data: $('#search_form').serialize()
              }).done(function(data){
                $('.table_here').html(data);
              })
              return false;
            });
            $(document).on('click', '.page_link', function(){
              var page_num = $(this).attr('value');
              console.log(page_num);
              $('#page_number').attr('value', page_num);
              $('#search_form').trigger('change');
            })
      });
   </script>
   <style>
    #nav {
      width: 100%;
      border: 1px solid black;
    }
      #search {
        display: inline-block;
        width: 400px;
      }
      #categories {
        display:inline-block;
        width: 200px;
      }

    #main_content {
      margin: 0 auto;
      border: 1px solid black;
      width: 90%;
    }
    #main_content h4, ul {
      display: inline-block;
      vertical-align: top;
    }
    #main_content ul {
      margin-left: 45%;
    }
    #item_nav li {
      display: inline-block;
    }
    #wrapper {
      margin-top: 15px;
    }
    #item_nav li:not(:last-child) {
      border-right: 1px solid black;
      padding-right: 5px;
    }
    table {
      border-collapse: separate;
      border-spacing: 0px 10px;
    }
    td:nth-child(even) {
      border-right: solid white 3px;
    }
    td {
      border: 1px solid rgb(0, 154, 173);
      height: 100px;
      width: 100px;
      padding: 5px;
    }
    
      .products_td {
        height: 100px;
        width: 200px;
        padding-right: 0px;
      }
      #product_link {
        display: block;
        height: 100%;
        width: 100%;
      }
      #product_price {
        text-align: center;
      }
      #product_description {
        color: white;
        background-color: rgb(0, 154, 173);
      }
      #product_name {
        text-align: center;

      }

      .arrow-left {
        float: right;
        margin-right: 0px;
        margin-bottom: 10px;
        width: 20px; 
        height: 20px; 
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent; 
        border-right:10px solid rgb(0, 154, 173); 
      }

    .item{
      width: 19.5%;
      height: 33%;
      outline: 1px solid black;
      display: inline-block;
      margin: 0;
    }
    #pagination li {
      display: inline-block;
    }
    #pagination li:not(:last-child){
      border-right: 1px solid black;
      padding-right: 5px;
    }
    .mini_image {
      width: 100%;
    }
    .nav-wrapper {
      background-color: black;
      padding-left: 20px;
    }
    .shopping_cart {
      padding-right: 20px;
    }

   </style>
   </head>
<body>
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">PlaceHolder eCommerce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
<!-- Shopping Cart item count -->
<?php        if($this->session->userdata('cart')) {   ?>
        <li class='shopping_cart'><a href="/cart">Shopping Cart(

          <?=array_sum($this->session->userdata('cart'))?>)</a></li>
          <?php         }?>

      </ul>
    </div>
  </nav>
  <div id="wrapper">
    <div id='nav'>

    <!-- Dropdown Trigger -->

      <div id="categories">
        <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Categories</a>
        <ul>
          <!-- Category Loop -->
           <!-- Dropdown Structure -->
            <ul id='dropdown1' class='dropdown-content'>
              <?php foreach($get_all_categories as $category){ ?>
              <li><a href="/category/<?=$category['id']?>"><?=$category['name']?></a></li>
              <li class="divider"></li>
              <?php }?>
              <li><a href="/">Show All</a></li>
            </ul>    
        </ul>
      </div>

    <!-- SEARCH FORM AJAX -->
      <div id='search'>

        <form id='search_form' action='index_partials' method='post' >

          <div class="input-field col s6">
            <i class="material-icons prefix">search</i>
            <input id="icon_prefix" type="text" name='search' class='search'>
            <input type='hidden' value='0' id='page_number' name='page_number'>
            <label for="icon_prefix">Search</label>
          </div>
        </form>
      </div>
      

    </div>
  </div>

    <div id="main_content">

      <?php foreach($get_all_categories as $category){
      	if (isset($id)&&$category['id']==$id) {  
      		$header=ucfirst($category['name']); 
       }elseif(!isset($id)){ 
            $header="All Products";
       }
      } ?>
      <h4><?=$header?></h4>
            <div id="items_list">
              <form id="sort_by" action="sort_by" method="post">
                <p>Sorted by
                  <select name="sort">
                    <option value="price_lowest">Price lowest</option>
                    <option value="price_highest">Price highest</option>
                 </select>
                </p>
              </form>
       <!-- AJAX HERE for table      -->
              <div class="table_here">
                <?php require('partials/index_partial.php') ?>
              </div>
        <div id='pagination'>
          <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <?php     if($items_all)
              {
                foreach($items_all as $items_all)
                {
                }
                $count = ($items_all['total']/15);
                  for($i = 0; $i < $count; $i++)
                  {         ?>
            <li class="active"><a class='page_link' href="#" value='<?=$i * 15?>'><?=$i + 1?></a></li>
        <?php     }   
              } ?>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
          </ul>
        </div>
            </div>
      </div>
</body>
</html>