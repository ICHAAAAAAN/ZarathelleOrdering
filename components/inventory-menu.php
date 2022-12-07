<?php
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

?>

<div class="col-xs-3" style="text-align: center;">
  <div class="list-group">
    <a href="view_food_items.php"
      class="list-group-item <?php echo ($_SESSION["page"] == "view items" ? "active" : "") ?>">View Items</a>
    <a href="view_order_details.php"
      class="list-group-item <?php echo ($_SESSION["page"] == "view details" ? "active" : "") ?>">View Checkout
      Details</a>
    <a href="add_items.php" class="list-group-item <?php echo ($_SESSION["page"] == "add item" ? "active" : "") ?>">Add
      Items</a>
    <a href="edit_items.php"
      class="list-group-item <?php echo ($_SESSION["page"] == "edit item" ? "active" : "") ?>">Edit Items</a>
    <a href="delete_items.php"
      class="list-group-item <?php echo ($_SESSION["page"] == "delete item" ? "active" : "") ?>">Delete Items</a>
  </div>
</div>