<form class="form form-inline" method="post" enctype="multipart/form-data">,
    <div class="form-group">
        <input  type="file" name="photo">
     </div>
    <div class="form-group">
        <button class="btn btn-info" type="submit">UPLOAD</button>
    </div>
</form>

<?php
$today_date = gmdate("d-m-y");
$dir = './uploads/';
$path  = './uploads/'.$directory;
if( is_dir( $path ) ) {
 mkdir( $path);
}
if( $type == 'image/png' || $type == 'image/jpg' || $type == 'image/gif' ){
    $ext = ltrim( $type,'image/');

// inca 3 variante -> extension
move_uploaded_file($_FILES['photo']['tmp_name'], $path.'/.'.time().'.'.$ext );
} else {
    print "Format Denied!!!";
}







 ?>
<?php include('./header.php'); ?>
<?php include('./footer.php'); ?>

<!-- при загрузке файл должен попадать в папку uploads и подпапку с текущей датой
бонус - валидация по типу файла jpeg/png -->
