<?php

require_once "common.php";

echo render_header(array("title" => "Forsiden"));

?>

<h1>Forsiden</h1>

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

<?php

echo $footer;
?>
