<?php
session_start()
?>

<?php include('connect.php') ?>
<?php include ('top_bar.php');?>
<?php include ('header.php');?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document
    </title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <form class="insert_form" action="insert_post.php"  method="post" enctype ="multipart/form-data">

      <h1 class="titre_center">Insert new post
      </h1>

      <div class="title_author">
        <div>
          <label> Post Title:
          </label>  &nbsp &nbsp &nbsp &nbsp
          <input type="text" name="title" size="40"/> &nbsp &nbsp &nbsp &nbsp
        </div>
        <div>
          <label> Post Author:
          </label>  &nbsp &nbsp &nbsp &nbsp
          <input type="text" name="author" size="40"/>
        </div> 
      </div>

      <div class="imageflex">
        <label class="lbl"> Image:
        </label> &nbsp &nbsp &nbsp &nbsp
        <input type="file" name="image" size="40"/>      
      </div>

      <div class="post_content">
        <label> Post content:
        </label> &nbsp &nbsp &nbsp &nbsp
        <textarea name="content"  rows="21" cols="70">
        </textarea>  
      </div>

      <div class="submitt">
        <input  type="submit" name="submit"/>
      </div

        </form>
  </body>


  <?php include ('footer.php');?>
</html> <!-- enb html -->
<?php
include("connect.php");
if(isset($_POST['submit']))
{
if($_POST['title']=='' or $_POST['content']=='' or $_POST["author"]=='')
{
echo("<script>alert ('fill all the field ')</script>");
exit();
}

else
{
$title=$_POST['title'];
$author=$_POST['author'];
$content=$_POST['content'];
$image_name=$_FILES['image']['name'];
$image_type=$_FILES['image']['type'];
$image_size=$_FILES['image']['size'];
$image_tmp=$_FILES['image']['tmp_name'];
$date=date('y.m.d');
if($image_type == "image/jpeg" or $image_type == "image/jpg" or $image_type == "image/png" or $image_type == "image/gif" )
{
if($image_size<=1000000000)
{
move_uploaded_file($image_tmp,"images/$image_name");
}
else
{
echo("<script> alert('larger image only 1 MB file sise is valid' )</script>");
}
}
else
{
echo("<script> alert('invalid file type' )</script>");
}
$conn = mysqli_connect("localhost", "root", "","cms") ;

 $loginuser=$_SESSION['LoginUsername'];
if (isset($loginuser))
{
$query ="INSERT into new_post(user,title,author,image,content,date) values('$loginuser','$title','$author' ,'$image_name','$content','$date')";
}
if(mysqli_query($conn,$query))
{
echo("<h1>post has been submitted !!</h1>");
}
}
}
?>
