<table>
    <tr>

      <!-- Items Loop -->
  <?php     foreach($items as $item)
      {                 ?>
    <td><a href='/product_info/<?=$item['id']?>'><img class='mini_image' src="../assets/images/image1.jpg"></a><?=$item['name']."<br>".$item['price']?></td>
    <?php  }  ?>
  	</tr>  
</table>

<!-- PAGINATION START -->
<div id='pagination'>
  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
<?php     if($items)
      {
        $count = ($items['total']/5);
          for($i = 0; $i < $count; $i++)
          {         ?>
    <li class="active"><a class='page_link' href="#" value='<?=$i * 5?>'><?=$i + 1?></a></li>
<?php     }   
          } ?>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>