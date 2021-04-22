<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Dashboard 
    </title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">
    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name
      </a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out
          </a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home">
                  </span>
                  Dashboard 
                  <span class="sr-only">(current)
                  </span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="insert_post.php">
                  <span data-feather="users">
                  </span>
                  add post
                </a>
              </li>
            </ul>
          </div>
        </nav>
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard
            </h1>
          </div>
          <?php $user=$_SESSION['LoginUsername']?> 
          <!--login name -->
          <?php  $conn = mysqli_connect("localhost", "root", "","cms") ;
$query= mysqli_query( $conn ,"select * from new_post where user='$user'");
while($row=mysqli_fetch_array($query))
{
$id=$row['id'];
$user=$row['user'];
$title=$row["title"];
$author=$row["author"];
$image=$row["image"];
$content= substr($row["content"],0,200);
$date=$row["date"];
?>
          <h2>Section title
          </h2>
          <form action="dashbord.php" method="post">
            <div class="table-responsive">
              <table class="table table-striped table-sm">
                <thead>
                  <tr>
                    <th>id
                    </th>
                    <th>users
                    </th>
                    <th>title
                    </th>
                    <th>author
                    </th>
                    <th>delete
                    </th>
                    <th>edit
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <?php echo "$id"; ?>
                    </td>
                    <td>
                      <?php echo "$user"; ?>
                    </td>
                    <td>
                      <?php echo "$title"; ?>
                    </td>
                    <td>
                      <?php echo "$author"; ?>
                    </td>
                    <!--button delete-->
                    <td>
                      <a  class="btn btn-primary" href="delete.php?id=<?php echo "$id";?>">delete
                      </a>
                    </td>
                    <!--button update-->
                    <td>
                      <a  class="btn btn-primary" href="edit.php?id=<?php echo "$id";?>">update
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table> 
              <!--end table-->
            </div>
          </form>
          <?php } ?>
        </main> 
        <!--end main-->
      </div>
    </div>
  </body>
</html>
