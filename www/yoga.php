<?php
require_once "common.php";
echo render_header(array("title" => "Yoga"));
?>

<h1>Yoga</h1>

<figure>
<!--http://commons.wikimedia.org/wiki/File:Yoga_at_a_Gym.JPG/-->
<?php optimized_image(array("src" => "bilder/yoga.jpg", "alt" => "Gruppetime i yoga")); ?>
</figure>

<iframe class="spotify-widget" src="https://embed.spotify.com/?uri=spotify:album:0viSbA3zEpb5QOxAcDb40G&amp;theme=white"></iframe>

 <blockquote lang="en">

    <p>Take care of your body. It's the only place you have to live.
    <br>- Jim Rohn</p>

 </blockquote>


<p>Yoga er en treningsform som fokuserer på både psykisk og fysisk sunnhet. 
Det finnes ulike varianter av yoga, og i dag er yoga elsket og praktisert av mange, derav også mange kjendiser. 
Yoga består av ulike avspenningsteknikker der man også fokuserer på å puste kontrollert. 
</p>

<p>Fordelene med yoga sies å være mange, blant disse er evnen til å stresse mindre, økt bevegelighet, smidighet og
bedre holdning. 
<br><a href="http://givebackyoga.org/wp-content/uploads/2012/12/The-Health-Benefits-of-Yoga-and-Exercise%EF%80%A2-A-Review-of-Comparison-Studies.pdf/">(The health benefits of Yoga and Exercise)</a></p>

<p>Øvelsene består av fysiske øvelser som kan bestå av både sittende øvelser og stående øvelser. Treningsformen
oppleves kanskje som lite aktiv for noen, men fordelene sies som sagt å være mange. Og det må da være flere
grunner til at det er så mange tilhengere av yoga. Har du lyst til å begynne på yoga, så er det flere yogakurs
man kan melde seg på, for eksempel kan du sjekke ut <a href="http://www.yogasenteret.com/">Yogasenteret</a>.</p>

<?php
echo $footer;
?>
