<?php
	
	include_once "maclist.php";
	function returnMacAddress() {
		$arpCommand = `arp -a`;
		$arpArray = explode("\\n",$arpCommand);

		$remoteIp = $_SERVER['REMOTE_ADDR'];

		$match = array();
		if( preg_match("/$remoteIp\) at ([^ ]+)/", $arpArray[0], $match) ) {
			return $match[1];
		}
		return "";
    }
	
	function returnNameFromMac() {
		$mac = returnMacAddress();
		$maclist = $GLOBALS['maclist'];

		if( isset($maclist[$mac])){
			return $maclist[$mac];
		}
		return "Unknown";
	}
  
?>
