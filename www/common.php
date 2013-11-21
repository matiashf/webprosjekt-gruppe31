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
    <script type="text/javascript" src="external_code/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="external_code/underscore-min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <title>{ title } | Sunne Studenter</title>
  </head>
  <body class="{ body_class }">
    <div id="fb-root"></div>
    <script>
      (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/nb_NO/all.js#xfbml=1&appId=319645501512056";
          fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/json" id="image-optimizer-json"><?php if (!readfile("js/image-optimizer.json")) echo "null"; ?></script>
    <header>
      <div id="logo">Sunne Studenter</div>
      <nav> 
        <div><a href="index.php"> Forsiden</a></div>
        <div>{ header_link }</nav></div>
    </header>
    <main>
<?php

$header = ob_get_contents();
ob_end_clean();
ob_start();

$default_header_link = "<a href=\"kostholdskarusellen.php\">Kostholdskarusellen</a>";
$default_body_class = basename($_SERVER['PHP_SELF'], '.php');
switch ( $default_body_class ) {
    case "index":
        $default_body_class = "forsiden";
        break;
    case "kostholdskarusellen":
        break;
    default:
        $default_body_class = "inspirasjonsside";
        break;
}

function render_header($vars) {
   global $header, $default_header_link, $default_body_class; // php «arver» ikke scope, til forskjell fra java

   if ( !array_key_exists("header_link", $vars) ) {
       $vars["header_link"] = $default_header_link;
   }
   if ( !array_key_exists("body_class", $vars) ) {
       $vars["body_class"] = $default_body_class;
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

function optimized_image($vars) {
    extract($vars); // «pakker ut» $vars til nåværende scope
    include "optimized_image.inc"; // include kjører filen i denne funksjonens scope
}

ob_end_clean();
ob_start();
?>
    </main>
    <footer>
      <!-- https://about.twitter.com/resources/buttons#tweet -->
      <div class="share-to-twitter">
        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      </div>

      <!-- https://developers.facebook.com/docs/plugins/share-button/ -->
      <div class="share-to-facebook">
        <div class="fb-share-button" data-type="button_count"></div>
      </div>
    </footer>
  </body>
</html>
<?php
$footer = ob_get_contents();
ob_end_clean();
?>
