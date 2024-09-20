
<?php ob_start();
require_once("config.php");


if(isset($_POST["post"])){
  $newpost=$_POST["newpost"];

   $q="INSERT INTO `freshpost` (`id`, `newpost`) VALUES ('', '$newpost')";

  $insert=mysqli_query($con, $q);
  if($insert){
    header("location:index.php");
  }
  else {
    echo "Not Inserted";
  }
}
 ?>

<style media="screen">
#icon ul a li{
  display: inline;
  padding: 20px;
  font-size: 20px;
  color: #00B0F0;
}
#icon ul{
  margin-top: 10px;
}
#icon ul input{
  margin-left: 300px;
  margin-top: -10px;
}
#post{
  margin: 10px;
  background-color: white;
}
</style>

<div class="panel panel-info">

  <div class="panel panel-body">

    <a href="#">  <span class="fa fa-user"> <li><?php echo $rws ["fname"] ?> <?php echo $rws ["lname"] ?> </li>  </span></a>
      <form class=""  method="post">
      <textarea   name="newpost" class="col-lg-12" rows="5"> </textarea>
      <div id="icon" class="col-lg-12">
        <ul>
          <a href="#"> <li> <span class="fa fa-file-image-o"></span></li></a>
          <a href="#"> <li> <span class="fa fa-file-movie-o"></span></li></a>
          <a href="#"> <li> <span class="fa fa-file-pdf-o"></span></li></a>

          <input type="submit" name="post" value="Post" class="btn btn-success btn-xs">
        </ul>

      </div>
      </form>
  </div>
</div>


<?php
$select="select * from freshpost order by id desc";
$q=mysqli_query($con, $select);
foreach ($q as $show) {?>

<div id="post" class="col-lg-12">
  <tr>
    <td class="pre"> <?php echo $show ["newpost"] ?></td>
    <td><a href="edit.php?id= <?php echo $show ['id'] ?> "> <span class="glyphicon glyphicon-edit" style="color: green"></span> </a> </td>
    <td><a href="#" id="<?php echo $show ['id'] ?>" onclick="deletee(this.id)"> <span class="glyphicon glyphicon-trash" style="color: red"></span> </a> </td> <br> </br>
  </tr>
</div>




  <?php } ?>

</table>


 <?php
 $data=ob_get_contents();
 ob_end_clean();
 require_once("masterpage.php");
  ?>
