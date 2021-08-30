<?php

	$dbname="h2obilling";
	$dbpass="";
	$uname="root";
	$server="localhost";

	$conn= mysqli_connect($server,$uname,$dbpass,$dbname);

	if(!$conn){
		echo "connection problem";
	}
	else{

	}
	?>