<?php
require_once "common.php";
echo render_header(array("title" => "Salsa"));
?>

<h1>Salsa</h1>
<figure>
<?php optimized_image(array("src" => "bilder/salsa.jpg", "alt" => "Salsa Brazil")); ?>

  <div class="attribution">
    <a href="http://www.flickr.com/photos/jarousseau/8409582476/">Foto: Vincent Jarousseau</a>
    <a class="cc-badge" href="http://creativecommons.org/licenses/by/2.0/deed.en_US">
      <img src="http://i.creativecommons.org/l/by/2.0/80x15.png" alt="Creative Commons Attribution 2.0">
    </a>
  </div>
</figure>

<iframe class="spotify-widget" src="https://embed.spotify.com/?uri=spotify:user:dgsnure:playlist:04Yx3q5s7MLF2yXKDulyVS&amp;theme=white"></iframe>

 <blockquote lang="en">

    <p>Let us read, and let us dance; these two amusements will never do any harm to the world.
    <br>- Voltaire</p>

 </blockquote>


<p>
Salsa er en pardans som finnes i forskjellige varianter. Det er et
stort salsamiljø i Oslo, og det er en fin dans å lære hvis man liker å
gå ut på byen og danse. 
</p>

<p>
Selv om det «bare» er en dans, kan det være god trening i salsa. Det
egner seg for folk som liker å være sosiale, og kanskje ikke er så
opptatt av selve treningen. Å danse salsa utvikler god kroppsholdning
og koordinasjon.
</p>

<p>
<a href="http://www.osidans.no/">OSI dans</a> holder kurs i kubansk salsa hvert semester. Det er flere
nivåer, og nybegynnerkurset egner seg for de som aldri har danset før.
</p>

<?php
echo $footer;
?>
