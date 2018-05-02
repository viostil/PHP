<?php

if(isset($_GET['p'])){
print "Va aflati pe pagina nr.". $_GET['p'];
}else{ print "Va aflati pe pagina 1";}


 ?>
<br><br>

 <a href="?p=1">Page 1</a>
 <a href="?p=2">Page 2</a>
 <a href="?p=3">Page 3</a>
 <a href="">Page alta</a>
