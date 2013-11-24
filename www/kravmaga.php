<?php
require_once "common.php";
echo render_header(array("title" => "Salsa"));
?>

<h1>Krav Maga</h1>
<figure>
<?php optimized_image(array("src" => "bilder/kravmaga.jpg", "alt" => "Kravmaga trening")); ?>

  <div class="attribution">
    Foto: <a href="http://www.flickr.com/photos/maxim303/6091619174/">Maxim B.</a>
    <a class="cc-badge" href="http://creativecommons.org/licenses/by-sa/2.0/deed.en_US">
      <img src="http://i.creativecommons.org/l/by/2.0/80x15.png" alt="Creative Commons Attribution-ShareAlike 2.0 Generic">
    </a>
  </div>
</figure>

<blockquote lang="en">

    <p>To uncover your true potential you must first find your own limits and then you have to have the courage to blow past them.
    <br>- Picabo Street</p>
    
 </blockquote>

<p>
Krav Maga er hebraisk for «nærkamp». Det er en selvforsvarsgren
som har elementer fra kampsport, men der utøvere ikke
konkurrerer. Treningen har som mål å forberede utøvere på tenkelige og
utenkelige konfliktsituasjoner som kan oppstå i livet.
</p>

<p>
Treningsformen er sosial, intens og egner seg for folk som liker å
trene. Treningene foregår både innendørs og utendørs. Det er ulike
former og det inkluderer både sivil, militær, politi og for
livvakter. Krav Maga er en god måte å lære selvforsvar, og det å trene
det regelmessig kan gi en følelse av trygghet.
</p>

<p>
I Oslo finnes det flere klubber for sivile, som for eksempel <a
href="http://www.kravmagaacademy.no/">Krav Maga Academy</a> ved
Alexander Kiellands plass.
</p>

<?php
echo $footer;
?>
