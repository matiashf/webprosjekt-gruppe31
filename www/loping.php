<?php
require_once "common.php";
echo render_header(array("title" => "Løping"));
?>

<h1>Løping</h1>

<figure>
<!--http://pixabay.com/no/kj%C3%B8rer-vann-utenfor-gj%C3%B8rme-81715/-->
<?php optimized_image(array("src" => "bilder/loping.jpg", "alt" => "Løping i gjørme")); ?>
</figure>

<blockquote lang="en">

    <p>Win If You Can, Lose If You Must, But NEVER QUIT!
    <br>- Cameron Trammell</p>

 </blockquote>

<p>Løping og jogging er det mange som gjør til daglig. Dette er veldig god trening for hele kroppen. Løping er noe som egner seg for de som har god psykisk styrke.
De som ikke har psykisk styrke, pleier ikke å presse seg selv godt nok for å få gode og positive resultater. Løping er noe som passer for de som liker å trene alene,
det er også supert hvis du ønsker en kort og intensiv trening. Hvordan begynne å løpe/jogge? Ta på treningstøy og joggesko, og gå ut å løp deg en tur!</p>

<p>Det finnes mange forskjellige typer løpetrening. Den beste måten å komme seg i form på kan også sies å være den verste. Det er intervalltrening, det går ut på at du skal ha 
intense intervaller på feks 30sek (f.eks løping) og mindre intense intervaller på 20sek (f.eks rolig jogging). Så holder du på med dette i ca 10 min.
Det finnes imidlertid mange løpeprogrammer og det er med dette ingen fasitsvar på løping. Det viktigste er at du løper i et tempo som kjennes behagelig for deg. Utfordre deg selv gjerne, men det viktigste
er at du kommer ut i trening.</p>

<p>Det er også viktig å sette seg et mål, og et godt mål kan være å delta i løp. I Oslo så er det mange forskjellige løp du kan melde deg på, 
	for eksempel <a href="http://www.sentrumslopet.no/">Sentrumsløpet</a>.</p>

	<iframe src="https://embed.spotify.com/?uri=spotify:user:spotify:playlist:2BgVZaiDigaqxTbZEI2TpE" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>

<?php
echo $footer;
?>
