<?php include('connect.php') ?>
<head>
       <!-- this is top bar -->
<?php include ('top_bar.php');?>
    <!-- headr -->
<?php include ('header.php');?>
    <title>About</title>
    <!-- css -->
    <link rel="stylesheet" href="style.css">
    <!-- cdn bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
  <!--------------------section------about------------------------------------------->
  <div class="container_about">

<div class="img_about_div"><img class="img_about" src="images/tablet-img.png" alt="avatar"></div>
<div class="description_about">
    <h1>About Us</h1>
   <p> Wikipédia est un projet d’encyclopédie collective en ligne,
        universelle, multilingue et fonctionnant sur le principe du wiki.
         Ce projet vise à offrir un contenu librement réutilisable, 
       objectif et vérifiable, que chacun peut modifier et améliorer.</p>
       <button>see more</button>

</div>
</div>
 <!-- end section about -->

<script src="javascript.js"></script>

</body>
<?php include ('footer.php');?> <!-- footer -->
</html>