<?php
$opt1loc = file("../accounts/opt1.txt");
$opt1acc = $mineloc[array_rand($opt1loc)];
$opt1stk = count($opt1loc);
$opt2loc = file("accounts/opt2.txt");
$otp2acc = $hululoc[array_rand($opt2loc)];
$opt2stk = count($opt2loc);

	
if ($_POST["key"] == "key1" OR
	$_POST["key"] == "key2" OR
	$_POST["key"] == "key3" ) {
if (isset($_POST["option1"])) {
	$opt1 = $opt1acc;
}
if (isset($_POST["option2"])) {
	$opt2 = $opt2acc;
}
}

?>
