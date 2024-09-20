<?php ob_start();
require_once("config.php");
?>

<?php
$id = $_GET['id'];
$q="select * from std where id =$id";
$select=mysqli_query($con,$q);

//foreach ($select as $show){?>




<div class="parnel panel-primary" >
  <div class="panel panel-heading">
    <h1 class="text-center" style="margin:0px; font-family: times new roman">Edit Student's Information</h1>

  </div>
  <div class="panel panel-body">

    <form method="post">
    <div class="form-group">
      <label for="">Student Name</label>
      <input type="text" name="name" value="<?php echo $show['name']?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Student Last Name</label>
      <input type="text" name="lname" value="<?php echo $show['lname']?>" class="form-control">
    </div>
    <div class="form-group">
      <label for="">Gender</label>
      <td> <input type="radio" name="gender" value="Male" required="required">Male
           <input type="radio" name="gender" value="Female">Female
      </td>
    </div>
    <div class="form-group">
      <label for="">Degree</label>
  <select class="form-control" value="<?php echo $show['degree']?>" name="degree">
          <option>Coleage</option>
          <option>Bachelor</option>
          <option>Master</option>
          <option>PhD</option>
        </select>
    </div>
    <div class="form-group">
      <label for="">Faclety</label>
      <select class="form-control" name="faclety">
        <option>Computer Secince</option>
        <option>Law</option>
        <option>Acenomic</option>
        <option>English</option>
        <option>Politacle Secinse</option>
        <option>Medical Secinse</option>
        <option>Civil Engeering</option>
        <option>IT</option>
        <option>Web Engeenaring</option>
      </select>

    </div>
    <input type="submit" name="submit" value="Save" class="btn btn-success">


    </form>

  </div>

</div>

<?php } ?>




<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>


 <?php
 if (isset($_POST['submit'])){
   $name=$_POST["name"];
   $lname=$_POST["lname"];
   $gender=$_POST["gender"];
   $degree=$_POST["degree"];
   $faclety=$_POST["faclety"];
   $q="UPDATE `std` SET `name` = '$name', `lname` = '$lname', `gender` = '$gender', `degree` = '$degree', `fialde` = '$faclety' WHERE `std`.`id` =$id";
    $insert=mysqli_query($con, $q);
    if($insert){
      header("location:stud.php");
    }
    else {
      echo "Not Inserted";
    }
 }
  ?>
