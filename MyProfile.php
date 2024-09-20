<?php ob_start();
require_once("config.php")
 ?>

<style media="screen">
  #backgroundImage{
    background-color: #c7e2ec;
    height: 200px;
  }
  #profileImage{
    background-color: #c7e2ec;
    height: 150px;
    margin-top: 2px;
  }
  #name{
    margin-top: 10px;
  }
</style>

    <div id="backgroundImage" class="col-lg-12">
          <img src="upload/<?php echo $rws ["backgroundImage"]; ?>" width="100%" height="100%"  />
    </div>
    <div class="col-lg-5">    </div>

    <div id="profileImage" class="col-lg-2">
       <img src="upload/<?php echo $rws ["profileImage"]; ?>" width="100%" height="100%"  />
    </div>
    <div class="col-lg-5">    </div>
    <div id="name" class="col-lg-12">
      <center>
      <td><?php echo $rws ["fname"] ?> </td>
       <td><?php echo $rws ["lname"] ?> </td>
     </center>
    </div>










<?php
$data=ob_get_contents();
ob_end_clean();
require_once("masterpage.php");
 ?>
