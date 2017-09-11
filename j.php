<?php
$targer_dir="upload/";
$target_file=$targer_dir.basename($_FILES['img']['name']);
$uploadok=1;
$imgexten=pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST['sub']))
{
	$chk=getimagesize($_FILES["img"]["tmp_name"]);
	if($chk!==false)
	{
		echo $_FILES['img']['name'];
		echo "File is an image - ".$chk["mime"].".";
		$uploadok=1;
	}
	else
	{
		echo "file not is an image.";
		$uploadok=0;
	}
}
if(file_exists($target_file))
{
	echo "Sorry, file already exists.";
	$uploadok=0;
}
if($_FILES["img"]["size"]>500000)
{
	echo "Sorry, your file is too large";
	$uploadok=0;
}
if($imgexten!="jpg" && $imgexten!="png" && $imgexten!="jpeg")
{
	echo "Sorry, only JPG,JPEG,PNG files are allowed";
	$uploadok=0;
}
if($uploadok==0)
{
	echo "Sorry, your file was not uploaded";
}
else
{
	if(move_uploaded_file($_FILES["img"]["tmp_name"],$target_file))
	{
		echo "The file ".basename($_FILES["img"]["name"])." has been uploaded";
	}
}
?>