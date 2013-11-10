<?php

require_once "common.php";

echo render_header(array("title" => "Forsiden"));

?>

<h1>Forsiden</h1>

<!-- Funnel: «A tube or pipe that is wide at the top and narrow at the
bottom, used for guiding liquid or powder into a small opening.» -->
<section class="funnel">
  <form>
    <fieldset>
      <legend>Intensitet</legend>
      <input id="input-intensity-intense" type="radio" name="intensity" value="intense">
      <label for="input-intensity-intense">Intensivt</label>
      <input id="input-intensity-relaxed" type="radio" name="intensity" value="relaxed">
      <label for="input-intensity-relaxed">Rolig</label>
    </fieldset>
    <fieldset>
      <legend>Sosialt</legend>
      <input id="input-sociable-social" type="radio" name="sociable" value="social">
      <label for="input-sociable-social">Med andre</label>
      <input id="input-sociable-alone" type="radio" name="social" value="alone">
      <label for="input-sociable-alone">Alene</label>
    </fieldset>
    <fieldset>
      <legend>Omgivelser</legend>
      <input id="input-environment-outdoors" type="radio" name="environment" value="outdoors">
      <label for="input-environment-outdoors">Ute</label>
      <input id="input-environment-indoors" type="radio" name="environment" value="indoors">
      <label for="input-environment-indoors">Inne</label>
    </fieldset>
    <fieldset>
      <legend>Målsetning</legend>
      <input id="input-recreation-training" type="radio" name="recreation" value="training">
      <label for="input-recreation-training">Komme i form</label>
      <input id="input-recreation-recreation" type="radio" name="recreation" value="recreation">
      <label for="input-recreation-recreation">Hyggelig aktivitet</label>
    </fieldset>
  </form>
</section>

<section>
<b>Aktiviteter:</b>
<ul>
	<li><a href="squash.php">Squash</a></li>
<li><a href="loping.php">Løping</a></li>
<li><a href="fotball.php">Fotball</a></li>
<li><a href="klatring.php">Klatring</a></li>
<li><a href="salsa.php">Salsa</a></li>
<li><a href="sykling.php">Sykling</a></li>
<li><a href="langrenn.php">Langrenn</a></li>
<li><a href="svomming.php">Svømming</a></li>
<li><a href="badminton.php">Badminton</a></li>
<li><a href="kubb.php">Kubb</a></li>
<li><a href="tennis.php">Tennis</a></li>
<li><a href="hiphop.php">Hiphop</a></li>
</ul>
</section>

<?php

echo $footer;
?>
