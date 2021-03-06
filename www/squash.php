<?php
require_once "common.php";
echo render_header(array("title" => "Squash"));
?>

<h1>Squash</h1>

<figure>
<!--http://upload.wikimedia.org/wikipedia/commons/thumb/7/74/Squash_court.JPG/591px-Squash_court.JPG-->
<?php optimized_image(array("src" => "bilder/squash.jpg", "alt" => "To stykker som spiller squash")); ?>
</figure>

 <blockquote lang="en">

    <p>Physical fitness is not only one of the most important keys to a healthy body, 
    it is the basis of dynamic and creative intellectual activity.
    <br>- John F. Kennedy</p>

 </blockquote>

<p>Squash er en innendørs sport som spilles på en bane med fire vegger mellom 2-4 personer. Utstyret er en racket og en liten gummiball. 
<br>Det er om å gjøre å skyte ballen mellom to markerte linjer på veggen. Den ene langt oppe på veggen og en langt nede. 
<br>Ballen kan sprette en gang i bakken, hvis ballen spretter mer en en gang i bakken får motstanderen poeng.</p>

<p>Squash er en fysisk krevende sport. Du må være sterk og det krever også god kondisjon. 
<br>Squash er kjempebra trening men også veldig gøy. Hvis du liker intensiv trening og du liker å spille med andre, så er kanskje squash noe for deg?</p>

<p>Studenter i Oslo som vil drive med squash, kan melde seg inn i: <a href="http://osisquash.no/">OSI squash</a>.</p>

<?php
echo $footer;
?>
