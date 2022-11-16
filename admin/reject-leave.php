<?php
include("../connection.php");
$id = $_REQUEST['id'];
$update_status = mysqli_query($conn,"update user_leave_details set status=2 where id='$id'");
if($update_status)
{
	header('location:manage-leave.php');
}
?>