<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- cdn bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- fontAwsem-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
    
</body>
</html>
       <!-- this is top bar -->
       <?php include ('top_bar.php');?>
    <!-- headr -->
<?php include ('header.php');?>
<div id="post_area">
<?php

include ("connect.php");
$page_id= $_GET['id'];
$conn = mysqli_connect("localhost", "root", "","cms") ;
$query= mysqli_query( $conn ,"SELECT * from new_post where id ='$page_id'");

while($row=mysqli_fetch_array($query))
{
    $id=$row['id'];
    $title=$row["title"];
    $author=$row["author"];
    $image=$row["image"];
    $content= substr($row["content"],0,200);
    $date=$row["date"];


?>

<div class=" col-md-4" style="text-align: center;">
<div class="card" style="width: 50rem;">
<img class="card-img-top" style="height:15rem;" src="images/<?php echo "$image"; ?>" alt="Card image cap">
<span>Published on : &nbsp; &nbsp; <?php echo "$date"; ?></span>
<span>Published by : &nbsp; &nbsp; <?php echo "$author"; ?></span>

<div class="card-body">
<h5 class="card-title"><?php  echo "$title"; ?></h5>
<p class="card-text"><?php  echo "$content"?></p>

</div>
</div>
</div>
<?php

}
?>

