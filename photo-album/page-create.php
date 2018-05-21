

<?php
$today_date = gmdate("d-m-y");
$dir = './uploads/';
if (!file_exists($dir.$today_date)) {
  mkdir($dir.$today_date, 0700);
};

$files =  array_diff(scandir($dir.$today_date), array('..', '.'));
rsort($files);
$x = 1;
if (count($files) != 0 ){
  $x = strtok($files[0], ".");
  $x = ++$x;
};
// $_POST[]
// $_FILES[]
if (isset($_FILES['photo'])){
  $up_file_type = ltrim($_FILES['photo']['type'], "image/");
  //var_dump($up_file_type);
  if ($_FILES['photo']['type'] = 'jpeg'){
    $img_type = '.jpeg';
  }
  elseif ($_FILES['photo']['type'] = 'image/png'){
    $img_type = '.png';
  }
  else {
    $img_type = '.'.$up_file_type;
  } 
//var_dump($_FILES);
move_uploaded_file($_FILES['photo']['tmp_name'], $dir.$today_date.'/'.$x.$img_type);
}

 ?>
<?php include('./header.php'); ?>
<?php include('./footer.php'); ?>

<!-- при загрузке файл должен попадать в папку uploads и подпапку с текущей датой
бонус - валидация по типу файла jpeg/png -->
