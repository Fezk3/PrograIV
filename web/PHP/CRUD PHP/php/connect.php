<?php
	$mysqli= new mysqli("db-progra4-2022.c8uyzer5nv8h.us-east-1.rds.amazonaws.com", "root", "12345678", "CRUD",3304);
	if(mysqli_connect_errno()){
		echo "Este sitio esta presentando problemas";
	}
	$mysqli->set_charset("utf8");
	?>