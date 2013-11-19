<?php
require_once "common.php";
echo render_header(array("title" => "Basketball"));
?>

<h1>Inspirasjonsside: Basketball</h1>
<!--http://farm4.staticflickr.com/3147/2751923597_f7f7b779ac_o.jpg-->
<?php optimized_image(array("src" => "bilder/basketball.jpg", "alt" => "")); ?>

 <blockquote lang="en">

    <p>I've missed more than 9000 shots in my career. I've lost almost 300 games. 
    26 times, I've been trusted to take the game winning shot and missed. 
    I've failed over and over and over again in my life. And that is why I succeed.
    - Michael Jordan</p>

  </blockquote>

<p>Basketball er en lagsport som spilles mellom to lag. Målet med spillet er å score poeng ved å kaste ballen
i mostanderens kurv. Ballen kan spilles med hendene ved å kaste den sin sine lagspillere, drible den alene eller slå med uknyttet hånd til motstandere for 
å få tak i ballen. Dribling er lov hvis ballen stusses i gulvet med en hånd gjentatte ganger.</p>

<p>Det vanlige er at en kamp spilles 4 x 10 min med pauser mellom hver periode. 
En vanlig scoring gir 2 poeng. Scoring ved straffekast gir 1 poeng mens en scoring fra området utenfor 3-poengslinjen kan også
gi 3 poeng.</p>

<p>Det finnes forskjellige spilleregler for basketball rundt om i verden. Profesjonell basketball slik som i den amerikanske NBA-ligaen skiller seg f.eks noe fra internasjonal amatørbasketball.</p>

<p>Studenter som har interesse for denne lagsporten kan f.eks melde seg inn i <a href="http://osiwp.bbhoop.net/">OSI Basket</a>.</p>

<?php
echo $footer;
?>
