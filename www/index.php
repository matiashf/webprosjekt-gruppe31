<?php

require_once "common.php";

echo render_header(array("title" => "Forsiden"));

?>

<h1>Forsiden</h1>

<script type="text/template" class="no-results-template">
  <p>Vi har ingen aktiviteter som passer dine preferanser. Prøv noe annet.</p>
</script>

<script type="text/template" class="funnel-template">
<!-- Funnel: «A tube or pipe that is wide at the top and narrow at the
bottom, used for guiding liquid or powder into a small opening.» -->
<section class="funnel">
  <h2>Inspirasjonstesten</h2>
  <div class="toggler"><span class="hide">Skjul</span><span class="show">Vis</span> Inspirasjonstesten</div>
  <form>
    <fieldset>
      <legend>Intensitet</legend>
      <input id="input-intensity-intense" type="radio" name="intensity" value="intense" tabindex="0">
      <label for="input-intensity-intense">Intensivt</label>
      <input id="input-intensity-relaxed" type="radio" name="intensity" value="relaxed" tabindex="0">
      <label for="input-intensity-relaxed">Rolig</label>
    </fieldset>
    <fieldset>
      <legend>Sosialt</legend>
      <input id="input-sociable-social" type="radio" name="sociable" value="social">
      <label for="input-sociable-social">Med andre</label>
      <input id="input-sociable-alone" type="radio" name="sociable" value="alone">
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
  <output class="result" for="input-intensity-intense input-intensity-relaxed input-sociable-social input-sociable-alone input-environment-outdoors input-environment-indoors input-recreation-training input-recreation-recreation">
    <p>Oppgi preferansene dine for å få et forslag til aktivitet.</p>
  </output>
  <div class="more">
    <div class="next">Foreslå noe annet</div>
  </div>
</section>
</script>

<section class="activities">
<h2>Aktiviteter</h2>
<ul>
  <li>
    <section class="activity">
      <a href="squash.php">
        <h3>Squash</h3>
        <?php optimized_image(array("src" => "bilder/squash.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social indoors training </script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="loping.php">
        <h3>Løping</h3>
        <?php optimized_image(array("src" => "bilder/loping.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense alone outdoors indoors training </script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="fotball.php">
        <h3>Fotball</h3>
        <?php optimized_image(array("src" => "bilder/fotball.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social outdoors training</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="klatring.php">
        <h3>Klatring</h3>
        <?php optimized_image(array("src" => "bilder/klatring.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense relaxed social alone indoors training </script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="salsa.php">
        <h3>Salsa</h3>
        <?php optimized_image(array("src" => "bilder/salsa.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">relaxed social indoors recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="kravmaga.php">
        <h3>Krav Maga</h3>
        <?php optimized_image(array("src" => "bilder/kravmaga.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social indoors training</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="sykling.php">
        <h3>Sykling</h3>
        <?php optimized_image(array("src" => "bilder/sykling.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense alone outdoors training</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="langrenn.php">
        <h3>Langrenn</h3>
        <?php optimized_image(array("src" => "bilder/langrenn.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense alone outdoors training</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="svomming.php">
        <h3>Svømming</h3>
        <?php optimized_image(array("src" => "bilder/svomming.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense alone indoors training</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="badminton.php">
        <h3>Badminton</h3>
        <?php optimized_image(array("src" => "bilder/badminton.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social indoors training </script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="kubb.php">
        <h3>Kubb</h3>
        <?php optimized_image(array("src" => "bilder/kubb.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties"> relaxed social outdoors recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="tennis.php">
        <h3>Tennis</h3>
        <?php optimized_image(array("src" => "bilder/tennis.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social outdoors indoors training</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="ski-og-snowboard.php">
        <h3>Ski og snowboard</h3>
        <?php optimized_image(array("src" => "bilder/ski-og-snowboard.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense relaxed social outdoors training recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="hiphop.php">
        <h3>Hiphop</h3>
        <?php optimized_image(array("src" => "bilder/hiphop.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social indoors training recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="basketball.php">
        <h3>Basketball</h3>
        <?php optimized_image(array("src" => "bilder/basketball.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social indoors training</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="vollyball.php">
        <h3>Vollyball</h3>
        <?php optimized_image(array("src" => "bilder/vollyball.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social outdoors training </script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="handball.php">
        <h3>Håndball</h3>
        <?php optimized_image(array("src" => "bilder/handball.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social indoors training</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="yoga.php">
        <h3>Yoga</h3>
        <?php optimized_image(array("src" => "bilder/yoga.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">relaxed alone indoors recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="pilates.php">
        <h3>Pilates</h3>
        <?php optimized_image(array("src" => "bilder/pilates.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">relaxed alone indoors recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="turgaaing.php">
        <h3>Turgåing</h3>
        <?php optimized_image(array("src" => "bilder/turgaaing.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">relaxed social outdoors recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="styrketrening.php">
        <h3>Styrketrening</h3>
        <?php optimized_image(array("src" => "bilder/styrketrening.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">intense social indoors training recreation</script>
    </section>
  </li>
   <li>
    <section class="activity">
      <a href="cricket.php">
        <h3>Cricket</h3>
        <?php optimized_image(array("src" => "bilder/cricket.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">relaxed social outdoors recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="boksing.php">
        <h3>Boksing</h3>
        <?php optimized_image(array("src" => "bilder/boksing.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">relaxed social outdoors recreation</script>
    </section>
  </li>
  <li>
    <section class="activity">
      <a href="hockey.php">
        <h3>Hockey</h3>
        <?php optimized_image(array("src" => "bilder/hockey.jpg", "alt" => "")); ?>
      </a>
      <script type="text/funnel-properties">relaxed social outdoors recreation</script>
    </section>
  </li>
  </ul>
</section>

<?php

echo $footer;
?>
