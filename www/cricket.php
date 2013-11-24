<?php
require_once "common.php";
echo render_header(array("title" => "Cricket"));
?>

<h1>Cricket</h1>
<!--http://farm5.staticflickr.com/4125/5107461261_a0123c3367_o.jpg-->
<?php optimized_image(array("src" => "bilder/cricket.jpg", "alt" => "Cricket")); ?>

<blockquote lang="en">

    <p>Winning isn't everything, but wanting to win is.
    <br>- Vincent Lombardi</p>

 </blockquote>
 

<p>Cricket er en lagsport som spilles mellom to lag med elleve spillere hver. 
Utstyret består av en hard og solid cricketball og flate balltre. Idretten spilles på en elliptisk formet gressbane med oppmerkede linjer. 
Hvert lag har en eller to omganger der de spiller vekselvis inne eller ute. Inne-laget har to spillere på banen, mens ute-laget har alle spillerne på banen.</p>

<p>Det kan være lurt å inneha styrke i armene når slagmannen skal slå ballen slik at han og medspilleren har tid til å bytte sider på midtstykket. 
Spillerne gjør lurt i å ha god kondis også så de rekker å løpe frem i god tid som slagmann eller få tak i ballen som utespiller.
Cricket egner seg for de som liker å spille i lag med andre.</p>

<p>Er du interessert i å spille cricket kan du for eksempel sjekke ut 
<a href="http://cricketforbundet.no/">Norges Cricketforbund</a>.</p>

<?php
echo $footer;
?>