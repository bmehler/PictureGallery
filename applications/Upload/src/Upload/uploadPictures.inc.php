<?php

$upload = array();
$upload['error'] = false;

$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);

if (file_exists("upload/" . $_FILES["file"]["name"])) {
  $upload['error'] = true;
  $upload['message'] = $_FILES["file"]["name"] . " already exists. ";
  return $upload;
}else {
  move_uploaded_file($_FILES["file"]["tmp_name"], "/upload/" . $_FILES["file"]["name"]);
  $upload['message'] =  "Bild gespeichert";
  savePicture();
  return $upload;	
}
?>