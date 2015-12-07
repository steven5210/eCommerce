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

