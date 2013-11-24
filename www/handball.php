<?php
require_once "common.php";
echo render_header(array("title" => "Håndball"));
?>
<h1> inspirasjonsside: Håndball </h1>

<!--hhttp://upload.wikimedia.org/wikipedia/commons/a/a6/Nikola_Karabatic_08.jpg-->
<?php optimized_image(array("src" => "bilder/handball.jpg", "alt" => "Håndball kamp")); ?>

<blockquote lang="en">

    <p>Victory is in having done your best. If you've done your best, you've won.
    <br>- Bill Bowerman</p>

 </blockquote>

<p>Håndball er en lagidrett som spilles på innendørs bane med midtlinje og et mål i hver ende. 
Man får poeng ved at ballen havner i motstanderens mål. Det laget som har flest mål etter to omganger vinner.</p>

<p>Håndball egner seg for de som liker å samarbeide med andre og liker sosialt samvær. Håndball er også en fysisk sport, 
så du må tåle å bli "tatt" på. Håndball ser ikke så krevende ut, men det er veldig slitsomt når du spiller. På mange måter 
så blir håndball en intervallsport. Du kommer fort i form, og det er i tillegg kjempegøy.</p>

<p>Studenter i Oslo som vil drive med håndball kan melde seg inn i <a href="http://www.osi-handball.com/">OSI håndball</a>.</p>

<?php
echo $footer;
?>
