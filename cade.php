<?php
session_start();

$conn = mysqli_connect("localhost","root","","shop_db");

if(isset($_POST['save_img']))
{
	$title = $_POST['com_title'];
	$discription = $_POST['com_discription'];
	$image = $_FILES['com_image']['name'];

	$query = "INSERT INTO products (com_title,com_discription,com_image) VALUES ('$title','$discription','$image')";
	$query_run = mysqli_query($conn, $query);

	if($query_run)
	{
		move_uploaded_file($_FILES["com_image"]["tmp_name"], "img/".$_FILES["com_image"]["name"]);
		$_SESSION['status'] = "Image Stored Successfully";
		header('location.php');
	}
	else
	{
		$_SESSION['status'] = "Image Not Inserted";
	}
}

?>