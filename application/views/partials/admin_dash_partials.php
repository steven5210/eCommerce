<table class='striped'>
        <thead>
          <tr>
              <th data-field="orderID">Order ID</th>
              <th data-field="name">Name</th>
              <th data-field="date">Date</th>
              <th data-field="bill_add">Billing Address</th>
              <th data-field="total">Total</th>
              <th data-field="status">Status</th>
          </tr>
        </thead>

        <tbody>
 <!-- ORDERS TABLE LOOP FOR DATA YEA -->
<?php                foreach($admin_orders as $order)
                      {    ?>
          <tr>
            <td><a href="/orderPage/<?=$order['id']?>"><?=$order['id']?></a></td>
            <td><?=$order['full_name']?></td>
            <td><?=$order['created_at']?></td>
            <td><?=$order['bill_address']?></td>
            <td><?=$order['total_price']?></td>
            <td><!-- Dropdown Trigger -->
    				  <a class='dropdown-button btn' href='#' data-activates='dropdown1'>Status</a>
    <?php                 }?>
    				  <!-- Dropdown Structure -->
    				  <ul id='dropdown1' class='dropdown-content'>
    				    <li><a href="#!">Order In Process</a></li>
    				    <li><a href="#!">Shipped</a></li>
    				    <li class="divider"></li>
    				    <li><a href="#!">Cancelled</a></li>
    				  </ul>
		        </td>
          </tr>
        </tbody>
</table>

<!-- PAGINATION START -->
<div id='pagination'>
  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
<?php     if($order)
      {
        $count = ($order['total']/5);
          for($i = 0; $i < $count; $i++)
          {         ?>
    <li class="active"><a class='page_link' href="#" value='<?=$i * 5?>'><?=$i + 1?></a></li>
<?php     }   
          } ?>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>