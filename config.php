<?php

define('db_server','localhost');
define('db_user_name','root');
define('db_password','');
define('db_name','pure');

$link=mysqli_connect(db_server,db_user_name,db_password,db_name);

if($link==false)
	die("Error:Could not connect".mysqli_connect_error());