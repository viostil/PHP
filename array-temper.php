<?php

//php shorthand / alternative syntax
$cities = [
  "Chisinau",
  "Balti",
  "Orhei"
];
// add to the END -> push
$cities[] = "Cahul";

$matrix = [
  [1,2,3],
  [4,5,6],
  [7,8,9]
];
// $matrix[1] -> [4,5,6];
// $matrix[1][2] ->6

var_dump( $var);
// !!!

//for ($i=0; $i<7; $i++){
//print $temp[$i]."<br>";
}

 ?>

<table border="1">
  <?php for ($i=0; $i<7; $i++){ ?>
  <tr>
    <?php if ($temp[$i] >= 20) { ?>
    <td bgcolor="green">
      <?php print $temp[$i];  ?>
    </td>
  <?php } else { ?>
    <td bgcolor="red">
      <?php print $temp[$i]; } ?>
    </td>
    </tr>
  <?php }?>
</table>
