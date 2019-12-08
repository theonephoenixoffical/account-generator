<?php
include "run-auth.php";
?>
<form action="no-auth.php" method="post">
Account Name Here: <input type="checkbox" name="option1"> stock: <?php echo $opt1stk;?><br>
Account Name Here: <input type="checkbox" name="option2"> stock: <?php echo $opt2stk;?><br>
Auth Key: <input type="text" name="auth">
  <hr>
  <?php echo $account;?>
  <hr>
<button type="submit">
</form>
