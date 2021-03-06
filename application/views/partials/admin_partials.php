<script type="text/javascript">
    $('select').material_select();
     $('.modal-trigger').leanModal();
</script>

<!-- start of table here -->
  <table class='striped'>
    <thead>
      <tr>
          <th data-field="picture">Picture</th>
          <th data-field="ID">ID</th>
          <th data-field="name">Name</th>
          <th data-field="inventoryCount">Inventory Count</th>
          <th data-field="quantitySold">Quantity Sold</th>
          <th data-field="action">Action</th>
      </tr>
    </thead>
    <tbody>
<!-- echo out data with a for loop here -->
 <?php foreach($admin_products as $product) { ?>
      <tr>
        <td><img class='mini_image' src="<?= $product['image'] ?>"></td>
        <td><?=$product['id']?></td>
        <td><?=$product['name']?></td>
        <td><?=$product['inventory']?></td>
        <td></td>
        <td>
          <ul>
<!-- Modal Trigger to edit product-->
            <li>
              <a class="modal-trigger" href="#modal<?=$product['id']?>">Edit</a><a class='delete_style' href="delete/<?=$product['id']?>">Delete</a>
            </li>
          </ul>
<!-- Modal Structure to edit product -->
          <div id="modal<?=$product['id']?>" class="modal modal-fixed-footer">
            <div class="modal-content">
              <h4>Edit Product</h4>
              <form action="update_product" method='post' enctype="multipart/form-data">​
                <label for="name">Name</label>
                <input id="name" type="text" name='name' value="<?=$product['name']?>">
                <input type="hidden" name='id' value="<?=$product['id']?>">​
                <label for='description'>Description</label>
                <textarea name='description'><?=$product['description']?></textarea>
                <label for="name">Price</label>
                <input id="price" type="text" name='price' value="<?=$product['price']?>">
                <label for="inventory">Inventory</label>
                <input type="text" value="<?=$product['inventory']?>">
                <select name='category'>
                  <option value="" disabled selected>Categories</option>
<?php             foreach($item_by_category as $category)
                  {  ?>
                  <option value="<?=$category['id']?>"><?=$category['name']?></option>
<?php             }  ?>
                </select>
                <input id="category" type="text" name='new_category' value="<?=$product['category_name']?>">
                <div class="btn">
                  <span>Image</span>
                  <input type="file" name="userfile">
<!-- Add in the draggable functionality here -->
                </div>
                <ul>
                  <li class='button'><button id='buttonSpace' class="btn waves-effect waves-light" type="submit">Cancel</button>
                    <button id='buttonSpace' class="btn waves-effect waves-light" type="submit">Preview</button>
                    <button class="btn waves-effect waves-light" type="submit">Edit Product</button>
                  </li>
                </ul>
              </form>​
            </div>
          </div>
        </td>
      </tr>
      <?php } ?>                 
    </tbody>
  </table>
<!-- PAGINATION START -->
<div id='pagination'>
	<ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
<?php 		if($product)
			{
				$count = ($product['total']/5);
					for($i = 0; $i < $count; $i++)
					{					?>
    <li class="active"><a class='page_link' href="#" value='<?=$i * 5?>'><?=$i + 1?></a></li>
<?php 		}		
					}	?>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</body>
</div>
