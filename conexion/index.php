<?php 

$Jhon = NEW mysqli("localhost","root","","dba");

if ($Jhon) {
	echo "bien conectado";
} else {
	echo "mal conectado";
}

?>