<?php 
include("./langs/lang_en.php");
include("./langs/lang_fr.php");

	$lang = "en";
	if(isset($_GET["lang"])){
		if(in_array($_GET["lang"], ["en", "fr"])){
			$lang = $_GET["lang"];
		}
	}

	$langs = [
		"en" => $lang_en,
		"fr" => $lang_fr
	];

	$l = $langs[$lang];

?>