<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My photo album</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" integrity="sha256-fmMNkMcjSw3xcp9iuPnku/ryk9kaWgrEbfJfKmdZ45o=" crossorigin="anonymous" />
    
<style>
    img{
        width: 270px;
        height: 300px;
    }
</style>

</head>
<body>
<div class="panel panel-default">
  <div class="panel-heading">Upload your photo</div>
    <div class="panel-body">
        <form class="form form-inline" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <input  type="file" name="photo">
             </div>
            <div class="form-group">
                <button class="btn btn-info" type="submit">UPLOAD</button>
            </div>
        </form>
    </div>
</div>
<div class="container">
<h2>Uploaded photo:</h2>
<?php 
$today_date = gmdate("d-m-y");
$dir = './uploads/';
$all_img_dir = array_reverse (array_reverse( array_diff(scandir($dir), array('..', '.')) ) );
foreach ($all_img_dir as $i => $value) {

 $files =  array_reverse (array_reverse( array_diff(scandir($dir.$value), array('..', '.')) ) );

?>

        <?php if (count($files) != 0 ) { ?>
            <?php $i = 0;
            foreach ($files as $key => $image) { 
                if($i%4 == 0) {
                    echo $i > 0 ? "</div>" : ""; // close div if it's not the first
                    echo "<div class='row'>";
                  } ?>
        <div class="col-md-3"><div><?php print $image ?></div><img src=" <?php print $dir.$value."/".$image; ?> " alt="images">
        </div>
        <?php $i++; ?>
                     <?php }; ?>
                 <?php }; ?>
                    </div>

 <?php }; ?>
</div>