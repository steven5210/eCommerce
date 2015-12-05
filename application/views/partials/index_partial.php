<table>
  <?php for($i = 0; $i < count($items); $i+=5) { ?>
    <tr>
      <!-- Items Loop -->
      <?php  for($j = $i; $j < $i + 5; $j++) { ?>
        <?php  if(!empty($items[$j])) { ?>
          <td id="products_td" style="background-image: url(<?= $items[$j]['image']?>); background-size: 100% 100%">
            <a id="product_link" href='/product_info/<?=$items[$j]['id']?>'></a>
            <div id="product_description">
              <p id="product_price"><?=$items[$j]['price'] ?></p>
              <p><?=$items[$j]['name'] ?></p>
            </div>
          </td>
        <?php  }  ?>
      <?php  }  ?>
    </tr> 
  <?php  } ?> 
</table>
<!-- PAGINATION START -->
<div id='pagination'>
  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
<?php     if($items_all)
      {
        $count = ($items_all['total']/5);
          for($i = 0; $i < $count; $i++)
          {         ?>
    <li class="active"><a class='page_link' href="#" value='<?=$i * 5?>'><?=$i + 1?></a></li>
<?php     }   
      } ?>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>