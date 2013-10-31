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
    <title>Sunne studenter</title>
  </head>
  <body>
    <header>
      <div id="logo">Sunne Studenter</div>
      <div><a href="#">Kostholdskarusellen</a></div>
    </header>

<?php $header = ob_get_contents(); ob_end_clean(); ob_start() ?>

    <footer>
      <a href="#">del på facebook</a>
      <a href="#">del på twitter</a>
    </footer>
  </body>
</html>
<?php $footer = ob_get_contents(); ob_end_clean(); ?>
