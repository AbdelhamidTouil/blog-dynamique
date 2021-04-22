

<?php
$delete_id=@$_GET['id'];
$conn = mysqli_connect("localhost", "root", "","cms") ;
$query="DELETE  FROM new_post where id=$delete_id";
if(mysqli_query($conn,$query))
{
echo("<script> alert('Deleted ');</script>" <header("Location:dashbord.php"));
}
?>
