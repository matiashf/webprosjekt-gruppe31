<?php
require_once "common.php";
echo render_header(array("title" => "Cricket"));
?>

<h1>Inspirasjonsside: Cricket</h1>
<!--http://en.wikipedia.org/wiki/File:Pollock_to_Hussey.jpg/-->
<img src="bilder/cricket.jpg" alt="Cricket" >

<p>Cricket er en lagsport og spilles med cricketball og balltre på gressbane. 
Hvert lag har en eller to omganger der de spiller vekselvis inne eller ute.
Innelaget har to spillere på banen, mens utelaget har alle spillerne på banen.</p>

<p>Cricket egner seg for de som liker å spille i lag med andre.</p>

<p>Er du interessert i å spille cricket kan du for eksempel sjekke ut 
<a href="http://cricketforbundet.no/">Norges Cricketforbund</a>.</p>

<?php
echo $footer;
?>