<table>
  <?php for($i = 0; $i < count($items); $i+=5) { ?>
    <tr>
      <!-- Items Loop -->
      <?php  for($j = $i; $j < $i + 5; $j++) { ?>
        <?php  if(!empty($items[$j])) { ?>
          <td>
            <a href='/product_info/<?=$items[$j]['id']?>'>
            <img class='mini_image' src="<?= $items[$j]['image'] ?>">
            <p><?=$items[$j]['name'] ?></p>
            <p><?=$items[$j]['price'] ?></p>
            </a>
          </td>
        <?php  }  ?>
      <?php  }  ?>
    </tr> 
  <?php  } ?> 
</table>
<?php  ?>
<!-- PAGINATION START -->
<div id='pagination'>
  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
<?php     if(!empty($items_all))
      {
        foreach($items_all as $items_all)
        {
        }
        $count = ($items_all['total']/15);
          for($i = 0; $i < $count; $i++)
          {         ?>
    <li class="active"><a class='page_link' href="#" value='<?=$i * 5?>'><?=$i + 1?></a></li>
<?php     }   
          } ?>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>