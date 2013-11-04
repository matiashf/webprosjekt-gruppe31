<?php

# This file controls the php output buffer to create $header and
# $footer variables. Thus, nothing is output when it is included.

# All errors should be captured
error_reporting(E_ALL);

ob_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>{ title } | Sunne Studenter</title>
  </head>
  <body>
    <header>
      <div id="logo">Sunne Studenter</div>
      <div><a href="#">Kostholdskarusellen</a></div>
    </header>
<?php

$header = ob_get_contents();

function render_header($vars) {
   global $header; // php «arver» ikke scope, til forskjell fra java
   return str_replace("{ title }", $vars["title"], $header);
   /* Jeg prøvde i utgangspunktet dette, men fikk det ikke til å fungere:
     return preg_replace_callback(
       "/{\s*(\w+)\s*}/",
       function ($matches) { return $vars["title"]; },
       $header); */
}

ob_end_clean();
ob_start();
?>

    <footer>
      <a href="#">del på facebook</a>
      <a href="#">del på twitter</a>
    </footer>
  </body>
</html>
<?php $footer = ob_get_contents(); ob_end_clean(); ?>
