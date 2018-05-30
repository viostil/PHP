<?php

function div( $content, $styles = []){
  $css = '';
  foreach ($styles as $property => $value) {
    $css .= "$property:$value;";
  }
  return "<div style=\"$css\">$content<div>";
}


function h1( $text){
  return "<h1>$text</h1>";
}

function a( $href,$text){
  return "<a href=\"$href\">$text</a>";
}


print
    div(
        h1(
          a("http://levyi.net","This is my title")
        ),
        ['background' => '#444',
          'border'    => '1px solid black',
          'padding'   => '10px'
        ]
      );

?>
