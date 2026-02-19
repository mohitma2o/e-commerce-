<!DOCTYPE html>
<html lang="en">
<title>OG Tech PC - Cart</title>
<?php include "header.php"; ?>
<?php error_log("Cart page opened"); // Main branch logging ?>

<div class="wide-container">
  <?php include "includes/order.inc.php" ?>
  <?php include "static/pages/cart_items.php" ?>
  <?php include "static/pages/order_items.php" ?>
</div>

<?php include "footer.php"; ?>
</html>