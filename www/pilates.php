<?php
require_once "common.php";
echo render_header(array("title" => "Pilates"));
?>

<h1>Pilates</h1>

<figure>
<!--http://upload.wikimedia.org/wikipedia/commons/9/91/Pilates_01.jpg-->
<?php optimized_image(array("src" => "bilder/pilates.jpg", "alt" => "En dame som trener pilates")); ?>
</figure>

<blockquote lang="en">

    <p>Looking after my health today gives me a better hope for tomorrow.
    <br>- Anne Wilson Schaef</p>

 </blockquote>

<p>Pilates er en treningsform som legger hovedvekt på kjernemuskulatur. Øvelsene er rolige og kan minne litt om yoga.
Pilates er elsket av mange Hollywoodkjendiser.</p>

<p>Ett problem i dagens hektiske samfunn er at mange lever et veldig stillesittende liv med mange timer foran data og TV-skjerm,
noe som kan føre til at vi får en slapp og dårlig kroppsholdning. Pilates trener musklene i hele kroppen og fokuserer særlig på kjernemuskulaturen vår i mage og rygg. 
Det er god trening for å trene styrke, smidighet og bevegelighet og strammer opp kroppen. Treningsformen passer for alle mennesker uansett form og alder.
</p>

<p>Ble du interessert? Sjekk for eksempel her <a href="http://balancestudio.no/"> Balance Studio</a>.</p>

<?php
echo $footer;
?>
