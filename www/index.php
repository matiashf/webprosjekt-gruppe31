<?php

require_once "common.php";

echo render_header(array("title" => "Forsiden"));

?>

<h1>Forsiden</h1>

<b>Aktiviteter:</b>
<ul>
<li><a href="loping.php">Løping</a></li>
<li><a href="fotball.php">Fotball</a></li>
<li><a href="klatring.php">Klatring</a></li>
<li><a href="salsa.php">Salsa</a></li>
<li><a href="sykling.php">Sykling</a></li>
</ul>

<?php

echo $footer;
?>
