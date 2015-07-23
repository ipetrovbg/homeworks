<?php

$connect = mysqli_connect('localhost', 'root', 'p8908271860', 'vratsad_dlopia');

if (!$connect) {
	
	die("Connection failed: " . mysqli_connect_error());

}