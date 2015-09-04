
<!--       <ul id="pagination">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul> -->
<table>
    <tr>

      <!-- Items Loop -->
  <?php     foreach($items as $item)
      {                 ?>
    <td><a href='/product_info/<?=$item['id']?>'><img class='mini_image' src="../assets/images/image1.jpg"></a><?=$item['name']."<br>".$item['price']?></td>
    <?php  }  ?>
  	</tr>  
<!-- 
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
  	</tr> -->
</table>