<?php
require_once "common.php";
echo render_header(array("title" => "Fotball"));
?>

<h1>Fotball</h1>

<figure>
<!--http://pixabay.com/no/fotball-spillere-konkurranse-lag-83222/-->
<?php optimized_image(array("src" => "bilder/fotball.jpg", "alt" => "Fotballspillere")); ?>
</figure>

<iframe class="spotify-widget" src="https://embed.spotify.com/?uri=spotify:user:1217244495:playlist:5zxRl045tUkxIPExnln8yo&amp;theme=white"></iframe>

 <blockquote lang="en">

    <p>Success is no accident. It is hard work, perseverance, learning, studying, sacrifice 
    <br>and most of all, love of what you are doing or learning to do.
    <br>- Pelé</p>

 </blockquote>
 

<p>Fotball er en idrett som spilles mellom to lag, hvert bestående av elleve spillere. Målet er å prøve å vinne, og for å vinne må man score flere mål enn motstanderen.
Av utstyr finnes det fotballsko, knebeskyttere, leggskinn og en fotball.</p>

<p>Fotball er en sport som kan egner seg for de som er glad i lagsport og sosialt samvær med lagkamerater. 
Alle kan drive med fotball og det finnes lag på alle nivåer. Fotball er den sporten flest personer driver med i Norge og er med dette en utrolig folkelig sport.  
Noe som er viktig når det gjelder fotball er å ha ballfølelse som vil si å kunne kontrollere ballen riktig for å få flyt i spillet samtidig som man dribler 
motspillerne og forsøker å beholde ballen hos seg selv og sitt lag. 
Dette er noe som man blir bedre på jo mer man trener.</p>

<p>Studenter i Oslo som vil drive med fotball kan melde seg inn i <a
href="http://www.osifotball.no/">OSI fotball</a>.</p>

<?php
echo $footer;
?>
