<pre>
<?php
$min_salary = 12000;
$max_salary = 60000;
// users database
$users = [
  "ionika" => [
    'email' => 'i@gmail.com',
    'avatar' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQks8doNt_7nTxAh4-4bHGqTHAhTTfXlUvTL6Ou63cqj6Dn2lL',
    'salary' => 30000,
    'abilities' =>['slab','lenos','rusinos'],
    'password' => '12345'
  ],
  "viorika" => [
    'email' => 'v@gmail.com',
    'avatar' => 'https://lifehacks.io/wp-content/uploads/How-To-Attract-The-Right-People-in-Your-Life-150x150.jpg',
    'salary' => 50000,
    'abilities' =>['harnic','bravo','muncitor'],
    'password' => '6789'
  ],
  "jenika" => [
    'email' => 'j@gmail.com',
    'avatar' => 'https://psych2go.net/wp-content/uploads/2017/12/7-Ways-to-Stop-Being-a-People-Pleaser-150x150.jpg',
    'salary' => 70000,
    'abilities' =>['istet', 'ager', 'indraznet'],
    'password' => '112233'
  ]
];

 ?>

 <table border="1">
<?php  foreach ($users as $username => $data) { ?>
   <tr>
     <td><?php print $username ?></td>
     <td>          </td>
      <td><img src="<?php print $data['avatar'] ?>"</td>
     <td><?php print $data['email'] ?></td>

     <td><?php print $data['password'] ?></td>
   </tr>
   <?php }  ?>



 </table>
