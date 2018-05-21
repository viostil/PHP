<form method="post" enctype="multipart/form-data">
  <input  type="file" name="photo">
  <button type="submit">UPLOAD</button>


</form>

<pre>
<?php
// $_POST[]
// $_FILES[]

var_dump($_FILES);
$dir = './uploads';
$folder_list = array_slice( scandir( $dir ), 2 );
var_dump( $folder_list );
$date = date('Y-m-d');
$path = "$dir/$date";
print "Current DATE is: " . $date . "<br><br>";




if ( $_FILES['photo']['type'] == "image/jpeg" || $_FILES['photo']['type'] == "image/png" ) {
  print "<h3>File format is true!</h3>";
  if (file_exists($path) ) {
    move_uploaded_file($_FILES['photo']['tmp_name'], "./$path/1.png");
  } else {
    mkdir( "./$path" );
    move_uploaded_file($_FILES['photo']['tmp_name'], "./$path/2.png");
  }
} else {
  print "<h3>File format is WRONG!</h3>";
};
 ?>

<p>при загрузке файл должен попадать в папку uploads и подпапку с текущей датой
  бонус - валидация по типу файла jpeg/png</p>
