<?php
switch($_POST["key"]){
	case fabian:
	session_start();
	$_SESSION["user"]="fabian";
	echo "gg";
	break;
}
?>
