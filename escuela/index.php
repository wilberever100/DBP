<?php
	include "SchoolPage.php";
	include 'macs.php';
	
	class Index extends SchoolPage{
		public function printBody() {
			$name = returnNameFromMac();
			$text = "<h1>Bienvenido $name!</h1>";
			return $text;
		}
	}
	
	$index = new Index();
	$index->printPage();
?>
