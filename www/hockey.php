<?php
require_once "common.php";
echo render_header(array("title" => "Hockey"));
?>

<h1>Hockey</h1>
<!--http://upload.wikimedia.org/wikipedia/commons/4/4b/Ice_Hockey_sharks_ducks.jpg-->
<?php optimized_image(array("src" => "bilder/hockey.jpg", "alt" => "Hockey kamp")); ?>

<blockquote lang="en">

    <p>There may be people that have more talent than you, but theres no excuse for anyone to work harder than you do.
    <br>- Derek Jeter</p>

 </blockquote>
 
<p>Hockey er et samlebegrep for idretter som har til felles at spillerne forsøker å 
føre en ball eller puck inn i motstanderens mål ved hjelp av en kølle. Det finnes i hovedsak to varianter
for hockey som er ishockey (bildet) og landhockey.</p>

<p>Idretten kan minne litt om bandy, og passer for de som liker å spille i lag. Det er tøff trening, men 
spillerne minsker faren for idrettsskader ved å bruke hjelm og beskyttelse.
Her kan man også tenke over hva man liker best, å spille på is eller land.</p>

<p>Fikk du lyst til å være med i en ishockeyklubb kan du sjekke  
<a href="http://www.aktivioslo.no/ishockey/">Oversikt over ishockeyforbund i Oslo/Akershus</a>.
Hvis du synes landhockey og innebandy hørtes bedre ut kan du sjekke
<a href="http://www.aktivioslo.no/landhockey/">Landhockeyklubber og innebandyklubber i Oslo/Akershus.</p>

<?php
echo $footer;
?>