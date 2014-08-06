<?php

$upload = array();
$upload['error'] = false;

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);

if (file_exists("uploads/" . $_FILES["file"]["name"])) {
  $upload['error'] = true;
  $upload['message'] = $_FILES["file"]["name"] . " Das Bild wurde schon hochgeladen!";
  
  return $upload;
}else {  
  move_uploaded_file($_FILES["file"]["tmp_name"], WORKING_DIRECTORY . "/uploads/" . $_FILES["file"]["name"]);
  $upload['message'] =  $_FILES["file"]["name"]. " gespeichert.";
  $fields = array();
  $fields['id'] = $_SESSION["id"];
  $fields['name'] = $_FILES["file"]["name"];
  $fields['format'] = substr($_FILES["file"]["name"], strpos($_FILES["file"]["name"], '.') + 1);
  $fields['size'] = $_FILES["file"]["size"];
  savePicture($fields['id'], $fields['name'], $fields['format'], $fields['size']);
  
  return $upload;	
}
?>