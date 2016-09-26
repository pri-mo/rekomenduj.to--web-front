<?php

$lang = 'pl';

$tagsBodyBasic = 'preload scope--outside device--mobile';

$tagsNav = 'nav--transparent';
$tagsTemplate = 'template--intro';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include 'public/components/head.php' ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <?php include 'public/components/bof-scripts.php' ?>

  <div class="page__wrapper">

    <?php include 'public/components/nav.php' ?>

    <main class="layout--fullscreen paint--brand">

      <?php
      $signup = false; $passremind = true; $passchange = false;
      include 'content/sign-form.php'
      ?>

    </main>

    <?php include 'public/components/footer.php' ?>
  </div>

  <?php include 'public/components/eof-scripts.php' ?>
</body>
</html>
