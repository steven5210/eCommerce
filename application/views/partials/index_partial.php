<table>
  <?php for($i = 0; $i < count($items); $i+=3) { ?>
    <tr>
      <!-- Items Loop -->
      <?php  for($j = $i; $j < $i + 3; $j++) { ?>
        <?php  if(!empty($items[$j])) { ?>
<<<<<<< HEAD
          <td id="product_image"class="products_td" style="background-image: url(<?= $items[$j]['image']?>); background-size: 100% 100%">
=======
          <td id="product_image"class="products_td" style="background-image: url('/assets/images/image1.jpg'); background-size: 100% 100%">
>>>>>>> 51eaf43062155de3f21d680b21957cd6935f6ab7
            <a id="product_link" href='/product_info/<?=$items[$j]['id']?>'></a>
            <div class="arrow-left"></div>
          </td>
          <td class="products_td" id="product_description">   
              <p id="product_name"><?=$items[$j]['name'] ?></p>
              <p id="product_price"><?=$items[$j]['price'] ?></p>
          </td>
        <?php  }  ?>
      <?php  }  ?>
    </tr> 
<<<<<<< HEAD
  <?php  } ?> 
=======
    <?php  }  ?>
>>>>>>> 51eaf43062155de3f21d680b21957cd6935f6ab7
</table>

