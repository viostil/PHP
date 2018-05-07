<?php
// users database
$users = [
  "ionika" => 'i@gmail.com',
  "viorika" => 'v@gmail.com',
  "jenika" => 'j@gmail.com',
];

 ?>

 <table border="1">
<?php  foreach ($users as $username => $email) { ?>
   <tr>
     <td><?php print $username ?></td>
     <td><?php print $email ?></td>
   </tr>
   <?php }  ?>



 </table>
