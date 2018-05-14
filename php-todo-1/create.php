<!-- action ->here, method ->get -->

<form>
  <input type="text" name="title" placeholder="enter task title...">
  <input type="text" name="time" placeholder="enter time...">
  <button type="submit">SAVE</button>
</form>

<?php

// 1) verficam dace sunt date in get
if(isset($_GET['title'])){
  // {title;}

      file_put_contents('./data/' . time() . '.json', json_encode ( $_GET) );

}
 ?>
