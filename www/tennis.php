<?php
require_once "common.php";
echo render_header(array("title" => "Tennis"));
?>

<h1>Tennis </h1>

<figure>
<!--http://farm8.staticflickr.com/7264/7107960055_3567cf6a33_o.jpg-->
<?php optimized_image(array("src" => "bilder/tennis.jpg", "alt" => "En som spiller tennis")); ?>
</figure>

<blockquote lang="en">

    <p>What you lack in talent can be made up with desire, hustle, and giving 110 percent all the time.
    <br>- Don Zimmer</p>

 </blockquote>

<p>Tennis er en sport som det er lett å lære seg. Har man ikke drevet med tennis før er det ikke vanskelig å sette seg inn i denne idretten.
 Hele spillet tennis handler om å få tennisballen over nettet og inn på motstanderens banehalvdel. Den som klarer å spille ut sin motstander på dette får poenget.
Tennis er en idrett som passer for deg som liker å konkurrere, og drive med en idrett som kun handler om deg selv og dine prestasjoner på banen.</p>

<p>Tennis er en sport som er veldig fysisk i den grad at man får god kondisjon av å drive med dette. 
	Det er veldig mye løping frem og tilbake på banen, og dette kan nesten sammenlignes med en hard intervalløkt. 
	Så hvis du er en person som er glad i ballspill og mye løping er tennis perfekt for deg.</p>

<p>Studenter i Oslo som vil drive med tennis kan melde seg inn i 
	<a href="https://www.facebook.com/OSITennis">OSI Tennis</a>.</p>

<?php
echo $footer;
?>
