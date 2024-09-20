<?php
session_start();
  $current_user = $_SESSION['check'];
  $sql = "SELECT * FROM account WHERE username = '$current_user'";
  $result = mysqli_query($con,$sql) or die(mysqli_error($con));
  while($rws = mysqli_fetch_array($result)){
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AskMe</title>
    <link rel="shortcat icon" type="image/x-icon" href="image/logo1.PNG">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div  id="container" class="container ">
     <header class="col-lg-12">
       <div class="col-lg-3">
         <img src="image/one.png" alt="" class="img img-responsive">
       </div>
       <div class="col-lg-4">
         <form method="get">
            <div id="search" class="input-group">
              <input type="search" name="search" value=""  class="form-control" placeholder="Search Here...">
              <span class="input-group-addon">
                <div class="glyphicon glyphicon-search"></div>
            </div>
        </span>
		 </form>
       </div>
       <div id="icons" class="col-lg-5">
         <ul>
           <a id="pic" href="MyProfile.php"> <li> <img  src="upload/<?php echo $rws ["profileImage"];  ?> " width="50px" height="50px" class="img img-circle" /></li></a>
           <a id="name" href="MyProfile.php"> <li><?php echo $rws ["fname"] ?> <?php echo $rws ["lname"] ?> </li></a>
           <a href="index.php"> <li> <span class="	fa fa-question-circle"></span></li></a>
           <a href="#"> <li> <span class="fa fa-globe"></span></li></a>
           <a href="#"> <li><span class="fa fa-refresh"></span></li> </a>
           <a href="signout.php"> <li><span class="fa fa-sign-out"></span></li> </a>
         </ul>
       </div>
     </header>
     <!-- Header End -->


     <!-- Aside Start-->
     <div class="col-lg-3">
       <aside class="">
        <h1 class="text-center">Dream Borad</h1>
        <li><?php echo $rws ["fname"] ?> <?php echo $rws ["lname"] ?> </li></a>
          <img src="image/aside1.jpg" alt="">
          <img src="image/aside2.jpg" alt="" >
          <img src="image/aside3.jpg" alt="" >

       </aside>
      </div>
       <!--Aside End  -->


       <!--Section Start  -->
       <div class="col-lg-9">
         <section>
         <?php require_once("config.php") ?>

         <?php
         if(isset($data)){
           echo $data;
         }
         else {

         }
          ?>

          <?php
        ///  session_start();
            $current_user = $_SESSION['check'];
            $sql = "SELECT * FROM account WHERE username = '$current_user'";
            $result = mysqli_query($con,$sql) or die(mysqli_error($con));
            while($rws = mysqli_fetch_array($result)){
           ?>
         <?php } ?>
         </section>
       </div>





    </div>

  </body>
</html>
<?php } ?>
