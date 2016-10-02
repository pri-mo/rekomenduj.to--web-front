<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = 'nav--single';
$tagsTemplate = 'template--notifications';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include 'components/head.php' ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <?php include 'components/bof-scripts.php' ?>

  <div class="page__wrapper">

    <?php include 'components/nav.php' ?>

    <main>
      <div class="layout--base">
        <h3>Powiadomienia</h3>
        <div class="notifis-empty">
          <span class="notifis-empty-icon" data-icon="M"></span>
        </div>
        <div class="notifis-empty">
          <span class="notifis-empty-info" data-name="Już za parę dni, za dni parę...">Nie masz powiadomień</span>
        </div>
      </div>
    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php
  include 'components/eof-scripts.php'
  ?>
</body>
</html>
