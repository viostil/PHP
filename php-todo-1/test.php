<pre>

<?php

//READ

// 1) read file content --> string

//$content = file_get_contents("./data/test.json");

// 2) json -> array
//$array = json_decode($content, true);
//var_dump ($array);
//foreach ($array as $key => $value){
//  print_r($key.":".$value."\n");
//}

//WRITE

$person = [
  "name" => "Jean Claude",
  "age" => 1000,
  "alive" => true
];

// 1) array -> json
$json = json_encode($person);
var_dump( $json);

// 2) save to file
file_put_contents("./data/person.json", $json);



 ?>
