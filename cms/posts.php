<?php include('connect.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- cdn bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
   
<?php include ('top_bar.php');?> <!-- this is top bar -->
<?php include ('header.php');?><!-----header---->
<!-----------------section post-------------------------->    
<div class="container">
  <div class="row ">
                <?php 
                $conn = mysqli_connect("localhost", "root", "","cms") ;
                $query= mysqli_query( $conn ,"select * from new_post");
                while($row=mysqli_fetch_array($query))
                {
                    $id=$row['id'];
                    $title=$row["title"];
                    $author=$row["author"];
                    $image=$row["image"];
                    $content= substr($row["content"],0,200);
                    $date=$row["date"];


                ?>

<div class=" col-md-4">
<div class="card" style="width: 18rem;"> 
<img class="card-img-top" src="images/<?php echo "$image"; ?>" alt="Card image cap">
<p class="ppost">Published on : &nbsp; &nbsp; <?php echo "$date";  ?></p>
<p class="ppost">Published by : &nbsp; &nbsp; <?php echo "$author"; ?></p>
 
  <div class="card-body">
    <h5 class="card-title"><?php  echo "$title"; ?></h5>
    <p class="card-text"><?php  echo "$content"?></p>

    <a  class="btn btn-primary" href="pages.php?id=<?php echo "$id";?>">Read More</a>

</div>
</div>
</div>
<?php

            }
            ?>

   </div>
  </div>
</body>
<?php include ('footer.php');?><!-- footer --> 
</html>