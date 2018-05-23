<pre>

<form class="form form-inline" method="post" enctype="multipart/form-data">,
    <div class="form-group">
        <input  type="file" name="photo">
     </div>
    <div class="form-group">
        <button class="btn btn-info" type="submit">UPLOAD</button>
    </div>
</form>

<?php

var_dump($_FILES);
$directory = date('Ymd');
$path  = './uploads/'.$directory;
$type = $_FILES['photo']['type'];
if( !is_dir( $path ) ) {
 mkdir( $path);
}
if( $type == 'image/png' || $type == 'image/jpeg' || $type == 'image/gif' ){


    $ext = ltrim( $type,'image/');
    $filename = $path.'/'.time().'.'.$ext;


// inca 3 variante -> extension
move_uploaded_file($_FILES['photo']['tmp_name'], $filename );

// $original_file_name = "./uploads/Sea.jpg";
$original = imagecreatefromjpeg($filename);


$new = imagecreatetruecolor(100,100);

imagecopyresampled($new, $original, 0, 0,   0, 0,  100, 100,  1000, 800);

$filename = str_replace( ".jpeg", "-small.jpeg", $filename);
$filename = str_replace( ".jpg", "-small.jpg", $filename);

imagejpeg( $new, "./uploads/small_sea.jpg");

} else {
    print "Format Denied!!!";
}


?>
