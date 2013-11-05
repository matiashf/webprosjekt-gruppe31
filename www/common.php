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
    <link rel="stylesheet" type="text/css" href="css/common.css">
    <script type="text/javascript" src="js/common.js"></script>
    <title>{ title } | Sunne Studenter</title>
  </head>
  <body>
    <header>
      <div id="logo">Sunne Studenter</div>
      <div>{ header_link }</div>
    </header>
<?php

$header = ob_get_contents();
ob_end_clean();
ob_start();

$default_header_link = "<a href=\"kostholdskarusellen.php\">Kostholdskarusellen</a>";

function render_header($vars) {
   global $header, $default_header_link; // php «arver» ikke scope, til forskjell fra java

   if ( !array_key_exists("header_link", $vars) ) {
       $vars["header_link"] = $default_header_link;
   }

   $rendered = $header;
   foreach($vars as $k=>$v) {
       $rendered = str_replace("{ " . $k . " }", $v, $rendered);
   }

   return $rendered;

   /* Jeg prøvde i utgangspunktet dette, men fikk det ikke til å fungere:
     return preg_replace_callback(
       "/{\s*(\w+)\s*}/",
       function ($matches) { return $vars[$matches[1]]; },
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
