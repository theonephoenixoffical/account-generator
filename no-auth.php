<?php
include "run.php";
?>
<form action="no-auth.php" method="post">
Account Name Here: <input type="checkbox" name="option1"> stock: <?php echo $opt1stk;?><br>
Account Name Here: <input type="checkbox" name="option2"> stock: <?php echo $opt2stk;?><br>
  <hr>
  <?php echo $account;?>
  <hr>
  <button type="submit">Submit</button>
</form>
