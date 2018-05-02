<?php

if(isset($_GET['year']) ){
$birth_year = $_GET['year'];
}else{$birth_year = 1990;}

if(isset($_GET['name']) ){
$name = $_GET['name'];
}else{$name = 'Nimeni';} 




$current_year = date("Y");

$age = $current_year - $birth_year;

print $name . " your age is " . $age;


 ?>
