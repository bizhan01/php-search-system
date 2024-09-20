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

    <style >
      #form{
        margin-left: 380px;
        margin-top: 10px;
        margin-bottom: -8px;
      }
      section div{
        background-color: #c5e6f3;
      }
      footer{
        background-color:#c5e6f3;
        margin-top: 10px;
      }

    </style>
  </head>
  <body>
    <div class="container ">
     <header class="col-lg-12">
       <div class="col-lg-3">
         <img src="image/one.png" alt="" class="img img-responsive">
       </div>
       <div class="col-lg-9">
         <form class="form" id="form" method="post">
             <input type="text" name="user" value="" placeholder="Your Username Here" >
             <input type="password" name="pass" value="" placeholder="Your Password Here">
             <input type="submit" name="login" value="LogIn" class="btn btn-success"> <br> </br>

           <?php
           if(isset($_POST['login'])){?>
             <div class="alert alert-danger">
               <a href="#" class="close" data-dismiss="alert" arira-lable="alart" >&times;</a>
               <p>Incerrect Username or Password!</p>
             </div>
           <?php } ?>
         </form>
       </div>
       <!--login form php code  -->



       <?php
       require_once("config.php");
       if (isset($_POST['login'])){
         $user=$_POST['user'];
         $pass=$_POST['pass'];
         $q="select * from account where username='$user' AND password='$pass'";
         $result=mysqli_query($con,$q);
         if(mysqli_num_rows($result)>0){
           session_start();
           $_SESSION['check']=$user;
           header("location:index.php");
         }
         else {
            header("location.login.php?login=invalid");
         }
       }

        ?>
     </header>

<!-- section codes -->
     <section>
      <div name="right" class="col-lg-7">
      <h3>Ask Me, helps you find your response faster and shorter than anytime else. Join us for now for creating a fast data flow and reflexive learning environment. Don’t forget to help me keep it free.</h3>
           <img src="" alt="">
      </div>

      <div name="left" class="col-lg-5">
  <?php
  if(isset($_POST["signup"])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
    $user=$_POST["user"];
    $pass=$_POST["pass"];
     $q="INSERT INTO `account` (`id`, `fname`, `lname`, `email`, `dob`, `username`, `password`) VALUES (NULL, '$fname', '$lname', '$email', '$dob', '$user', '$pass')";

    $insert=mysqli_query($con, $q);
    if($insert){
      header("location:login.php");
    }
    else {
      echo "Not Inserted";
    }
  }
   ?>
   <form class="form" method="post">
     <h3>Creat Your Account for Free</h3>
    <div class="form-group">
    <label for="">Fist Name</label>
      <input type="text" name="fname" value="" class="form-control">
    </div>
        <div class="form-group">
        <label for="">Last Name</label>
      <input type="text" name="lname" value="" class="form-control">
        </div>
      <div class="form-group">
        <label for="">Email Address</label>
      <input type="email" name="email" value="" class="form-control">
      </div>
      <div class="form-group">
      <label for="">Date of Birth</label>
        <input type="date" name="dob" value="" class="form-control">
        </div>
          <div class="form-group">
        <label for="">User-Name</label>
            <input type="text" name="user" value="" class="form-control">
        </div>
          <div class="form-group">
          <label for="">Password</label>
          <input type="password" name="pass" value="" class="form-control">
          </div>

        <input type="submit" name="signup" value="SignUp" class="btn btn-info">
         <br></br>
    </form>
      </div>
     </section>

     <!--footer code-->
     <footer>

      <h4 class="text-center">You must be change you wish to see it in the world</h4>
      <h4 class="text-center">Developed By: Rahmatullah “Bizhan” </h4>
     </footer>

   </div>
 </body>
</head>
</html>
