<?php
include("../connection.php");
$id = $_REQUEST['id'];
$update_status = mysqli_query($conn,"update user_tour_details set status=1 where id='$id'");
if($update_status)
{
	header('location:manage-tour.php');
}

?>