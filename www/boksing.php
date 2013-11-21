<?php
require_once "common.php";
echo render_header(array("title" => "Boksing"));
?>

<h1>Inspirasjonsside: Boksing</h1>
<!--http://upload.wikimedia.org/wikipedia/commons/f/ff/Boxing_%28USA_vs._CAN%29_at_the_1995_Pan_American_Games.JPEG/-->
<?php optimized_image(array("src" => "bilder/boksing.jpg", "alt" => "Boksematch")); ?>

<blockquote lang="en">

    <p>“I hated every minute of training, but I said, ‘Don’t quit. 
    Suffer now and live the rest of your life as a champion.
    <br>- Muhammad Ali</p>

 </blockquote>

<p>Boksing er en kampsport som spilles mellom to personer som foregår i en boksering som er begrenset med taulinje rundt.   
Ustyret er polstrede lærhansker på hendene som det bokses med, ofte hjelm og knebeskyttere og beskyttende belegg rundt tenna. 
Man kan vinne ved å slå motstanderen flest ganger, noe man blir belønnet med poeng på eller så kan man vinne på knockout. 
Knockout vil si at man slår sin motstander ned eller kampudyktig på annen måte i minst 10 sekunder.</p>

<p>Boksing er tøff trening som trener både styrke og kondisjon. Det passer for de som liker trening med 
høy intensitet.</p>

<p>Tror du boksing er noe for deg kan du jo sjekke ut 
<a href="http://osi-boksing.com/">OSI Boksing</a>.</p>

<?php
echo $footer;
?>