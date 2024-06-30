<html>
<head>
<title>Check Mate >w- </title>
haha N O
</head>
<body>

<?php
echo "\$_FILES[\"fileUpload\"][\"name\"] = ".$_FILES["fileUpload"]["name"]."<br>";
echo "\$_FILES[\"fileUpload\"][\"type\"] = ".$_FILES["fileUpload"]["type"]."<br>";
echo "\$_FILES[\"fileUpload\"][\"size\"] = ".$_FILES["fileUpload"]["size"]."<br>";
echo "\$_FILES[\"fileUpload\"][\"tmp_name\"] = ".$_FILES["fileUpload"]["tmp_name"]."<br>";
echo "\$_FILES[\"fileUpload\"][\"error\"] = ".$_FILES["fileUpload"]["error"]."<br>";

if(copy($_FILES["fileUpload"]["tmp_name"],"UploadGoHere/".$_FILES["fileUpload"]["name"])) // Upload/Copy
{
echo "Copy/Upload Complete yay ^w^.";
}
else {
  echo "upwoad has faiwed sowwy ;<";

}
?>
</body>
</html>
