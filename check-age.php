<?php
if(isset($_GET['age'])){
$age = $_GET['age'];
}else{
  $age = 0;
}
if($age >=18){
  $color="green";
  $message="Welcome";
}else{
  $message ="Denied!";
  $color="red";
}
 ?>

 <h1 style="color: <?php print $color ?>"><?php print $message ?></h1>
