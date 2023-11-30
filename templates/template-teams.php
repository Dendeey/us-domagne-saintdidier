<?php
/*
  Template Name: Templage Teams
*/
get_header();
?>

<main class="main__all__pages">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
  <?php endwhile;
  endif; ?>

  <?php
  $dataDef = getDefTeamsPageData();
  // var_dump($dataDef);

  $dataGar = getGarTeamsPageData();
  // var_dump($dataGar);

  $dataMil = getMilTeamsPageData();
  // var_dump($dataMil);

  $dataAtt = getAttTeamsPageData();
  // var_dump($dataAtt);

  $dataStaff = getStaffTeamsPageData();
  // var_dump($dataStaff);

  $dataWidgets = getScorencoWidgetsTeamPage();
  // var_dump($dataWidgets);
  ?>

  <section class="teams__navigation">
    <a href="#classement-teams">Classement</a>
    <a href="#calendrier__calendrier-teams">Calendrier<span>/</span>Résultats</a>
  </section>

  <section class="teams__gallery__navigation">
    <ul>
      <li><a href="#gardiens">Gardiens</a></li>
      <li><a href="#defenseurs">Défenseurs</a></li>
      <li><a href="#milieux">Milieux</a></li>
      <li><a href="#attaquants">Attaquants</a></li>
      <li><a href="#staff">Staff</a></li>
    </ul>
  </section>

  <div class="container__behavior">

    <section class="teams__gallery">

      <section id="gardiens" class="teams__gallery__header">
        <h2>Gardiens</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countGarData = count($dataGar['gar']);
        // var_dump($countGarData);
        for ($g = 1; $g < $countGarData; $g++) {

          $keyGar = 'gar' . $g;
          if (isset($dataGar['gar'][$keyGar])) {
            $garData = $dataGar['gar'][$keyGar];
            // var_dump($garData);
          }
          if ($garData) {
        ?>
            <figure>
              <img src="<?php echo $garData['url'] ?>" alt="<?php echo $garData['title'] ?>">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

      <span class="style__border__bottom"></span>
    </section>

    <section id="defenseurs" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Défenseurs</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countDefData = count($dataDef['def']);
        for ($i = 1; $i < $countDefData; $i++) {

          $keyDef = 'def' . $i;
          if (isset($dataDef['def'][$keyDef])) {
            $defData = $dataDef['def'][$keyDef];
            // var_dump($defData);
          }
          if ($defData) {
        ?>
            <figure>
              <img src="<?php echo $defData['url'] ?>" alt="<?php echo $defData['title'] ?>">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

      <span class="style__border__bottom"></span>
    </section>

    <section id="milieux" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Milieux</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countMilData = count($dataMil['mil']);
        // var_dump($countMilData);
        for ($m = 1; $m < $countMilData; $m++) {

          $keyMil = 'mil' . $m;
          if (isset($dataMil['mil'][$keyMil])) {
            $milData = $dataMil['mil'][$keyMil];
            // var_dump($milData);
          }
          if ($milData) {
        ?>
            <figure>
              <img src="<?php echo $milData['url'] ?>" alt="<?php echo $milData['title'] ?>">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

      <span class="style__border__bottom"></span>
    </section>

    <section id="attaquants" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Attaquants</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countAttData = count($dataAtt['att']);
        // var_dump($countAttData);
        for ($a = 1; $a < $countAttData; $a++) {

          $keyAtt = 'att' . $a;
          if (isset($dataAtt['att'][$keyAtt])) {
            $attData = $dataAtt['att'][$keyAtt];
            // var_dump($attData);
          }
          if ($attData) {
        ?>
            <figure>
              <img src="<?php echo $attData['url'] ?>" alt="<?php echo $attData['title'] ?>">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>

      <span class="style__border__bottom"></span>
    </section>

    <section id="staff" class="teams__gallery">

      <section class="teams__gallery__header">
        <h2>Staff</h2>
      </section>

      <section class="teams__gallery__content">
        <?php
        $countStaffData = count($dataStaff['staff']);
        // var_dump($countStaffData);
        for ($s = 1; $s < $countStaffData; $s++) {

          $keyStaff = 'staff' . $s;
          if (isset($dataStaff['staff'][$keyStaff])) {
            $staffData = $dataStaff['staff'][$keyStaff];
            // var_dump($staffData);
          }
          if ($staffData) {
        ?>
            <figure>
              <img src="<?php echo $staffData['url'] ?>" alt="<?php echo $staffData['title'] ?>">
            </figure>
          <?php } ?>
        <?php } ?>
      </section>
      
    </section>

    <section class="teams__widgets">
      <?php if ($dataWidgets['widget']['widget1']) { ?>
        <section id="classement-teams">
          <h3>Classement</h3>
          <span class="style__border__bottom"></span>
          <?php echo $dataWidgets['widget']['widget1']; ?>
        </section>
      <?php } ?>

      <?php if ($dataWidgets['widget']['widget2']) { ?>
        <section id="calendrier__calendrier-teams">
          <h3>Calendrier<span>/</span>Résultats</h3>
          <span class="style__border__bottom"></span>
          <?php echo $dataWidgets['widget']['widget2']; ?>
        </section>
      <?php } ?>
    </section>

  </div>

</main>
<?php
get_footer();
?>