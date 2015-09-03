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
   <style>
    #side_nav {
      width: 200px;
      border: 1px solid black;
      display: inline-block;
      vertical-align: top;
    }
    #main_content {
      display: inline-block;
      border: 1px solid black;
      display: inline-block;
      width: 75.5%;

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
    td {
      border: 1px solid black;
      height: 100px;
      width: 100px;
    }
    table {
      height: 700px;
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

   </style>
   </head>
<body class='container'>
  <nav>
    <div class="nav-wrapper">
      <a href="#" class="brand-logo">PlaceHolder eCommerce</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
<!-- Shopping Cart item count -->
<?php        if($this->session->userdata('cart')) {   ?>
        <li><a href="/cart">Shopping Cart(
          <?=count($this->session->userdata('cart'))?>)</a></li>
          <?php         }?>
      </ul>
    </div>
  </nav>
  <div id="wrapper">
    <div id='side_nav'>
      <!-- completed -->
      <form action="search_by_name" method="post">
        <input type="text" name="search" placeholder="Product name">
        <input type="hidden" name='page_number' value="0">
      </form>
      <h5>Categories</h5>
      <ul>
        <!-- Category Loop -->
<?php            foreach($get_all_categories as           $category)        { ?>
        <li><a href="<?=$category['id']?>"><?=$category['name']?></a></li>

<?php }?>
      </ul>
    </div>
    <div id="main_content">
      <h4>Tshirts (page 2)</h4>
      <ul id="item_nav">
        <li><a href="#">first</a></li>
        <li><a href="#">prev</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">next</a></li>
      </ul>
      <form action="sort_by" method="post">
        <p>Sorted by
          <select name="sort">
            <option value="price_lowest">Price lowest</option>
            <option value="price_highest">Price highest</option>
          </select>
        </p>
        <input type="submit">
      </form>
      <div id="items_list">
        <table>
          <tr>

      <!-- Items Loop -->
      <?php foreach($items as $item): ?>
          <td><a href='/product_info/<?=$item['id']?>'><img class='mini_image' src="<?= $item['image']?>"></a><?=$item['name']."<br>".$item['price']?></td>
      <?php endforeach; ?>
          </tr>

          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </table>
      </div>
      <ul id="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
  </div>
</body>
</html>