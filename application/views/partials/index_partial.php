<table>
  <?php for($i = 0; $i < count($items); $i+=3) { ?>
    <tr>
      <!-- Items Loop -->
      <?php  for($j = $i; $j < $i + 3; $j++) { ?>
        <?php  if(!empty($items[$j])) { ?>
          <td class="products_td" style="background-image: url(<?= $items[$j]['image']?>); background-size: 100% 100%">
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
  <?php  } ?> 
</table>
