<?php

//php shorthand / alternative syntax
$temp = [
  23,  // 0
  25,  // 1
  20,  // 2
  19,  // 3
  18,  // 4
  20,  // 5
  29 // 6
];
for ($i=0; $i<7; $i++){
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
