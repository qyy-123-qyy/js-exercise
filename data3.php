<?php
//echo "hello world";
$id=$_GET["id"];
$title=$_GET["title"];

echo json_encode(array(
	"id"=>$id,
	"title"=>$title,
	"age"=>19
))
?>