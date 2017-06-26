<?php
	define("MYSQL_DB", "pindle");
	define("SQL_ITEM_TABLE_NAME", "item");
	define("SQL_ITEM_VIDEO_TABLE_NAME", "item_video");
	define("SQL_LINK_TABLE_NAME", "link");
	define("SQL_VIDEO_TABLE_NAME", "video");
	define("SQL_IMAGE_TABLE_NAME", "image");
	define("SQL_ATTRIBUTE_TABLE_NAME", "attribute");
	
	$mysqli = mysqli_connect('localhost', 'root', 'root', MYSQL_DB) or die("Error " . mysqli_error($link));
	
	include "util/sqlUtil.php";
	
	include 'model/dbObject.php';
	include "model/user.php";
	
	//include "model/objectUtil.php";
?>