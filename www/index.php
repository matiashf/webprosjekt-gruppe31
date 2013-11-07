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
      <input type="radio" name="intensity" value="intense">
      <label for="intensity">Intensivt</label>
      <input type="radio" name="intensity" value="relaxed">
      <label for="intensity">Rolig</label>
    </fieldset>
    <fieldset>
      <legend>Sosialt</legend>
      <input type="radio" name="social" value="social">
      <label for="sociable">Med andre</label>
      <input type="radio" name="social" value="alone">
      <label for="sociable">Alene</label>
    </fieldset>
    <fieldset>
      <legend>Omgivelser</legend>
      <input type="radio" name="environment" value="outdoors">
      <label for="environment">Ute</label>
      <input type="radio" name="environment" value="indoors">
      <label for="environment">Inne</label>
    </fieldset>
    <fieldset>
      <legend>Målsetning</legend>
      <input type="radio" name="recreation" value="training">
      <label for="environment">Komme i form</label>
      <input type="radio" name="recreation" value="recreation">
      <label for="environment">Hyggelig aktivitet</label>
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
</ul>
</section>

<?php

echo $footer;
?>
