<?php
$name="Xiaomi";
$photo="https://enter.online/images/thumbnails/200/200/detailed/52/xiaomi_redmi_5_plus_black1.png"; //string
$params="Parametrii iiiii jhg gkjhg khgkjhgkjhgkjhg";
$price="1589";
$currency="EURO";
$k=20.50;

 ?>
<?php
$price_euro = $price / $k;
 ?>



<h2><?php print $name?></h2>
<img src="<?php print $photo ?>" width="150"/>
<p>
  <?php print $params ?>
</p>
<p> <?php print round($price_euro, 2) ?> <small> <?php print $currency ?></small></p>
