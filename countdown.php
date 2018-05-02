<?php
$date = date('Y/m/d  H:i:s');
$time = strtotime('2018-01-01');
$time = strtotime($date);
$time = strtotime('today +10day');
 ?>

 <h2>Curent Date Is <?php print $date ?></h2>
 <h2>Curent Date Is <?php print date('Y/m/d  H:i:s',$time) ?></h2>
