<?php 
$con=mysqli_connect('sql309.byethost7.com','b7_25814993','5f0v8wpz','b7_25814993_smanagement');	
$delete=$_GET['del'];
$query="delete from s_info where s_id='$delete'";

if(mysqli_query($con,$query))
{
echo "<script>window.open('view.php?deleted=$s_id Data has been deleted successfully....','_self')</script>";
}
?>