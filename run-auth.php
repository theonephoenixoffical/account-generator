<?php
$mineloc = file("../accounts/minecraft.txt");
$mineacc = $mineloc[array_rand($mineloc)];
$minestk = count($mineloc);

$hululoc = file("../accounts/hulu.txt");
$huluacc = $hululoc[array_rand($hululoc)];
$hulustk = count($hululoc);


$uplystk = count($uplyloc);
if ($_POST["key"] == "key1" OR
	$_POST["key"] == "key2" OR
	$_POST["key"] == "key3" ) {
if (isset($_POST["minecraft"])) {
	$account = $mineacc;
	$type = "minecraft";
}

if (isset($_POST["hulu"])) {
	$account = $huluacc;
	$type = "hulu";
}

if (isset($_POST["spotify"])) {
	$account = $spotacc;
	$type = "spotify";
}
if (isset($_POST["fortnite"])) {
	$account = $fortacc;
	$type = "fortnite";
}if (isset($_POST["uplay"])) {
	$account = $uplyacc;
	$type = "uplay";
}
	
$break1 = "<hr><br><div class='account'>";
$break2 = "<br><hr></div>";
}
?>
