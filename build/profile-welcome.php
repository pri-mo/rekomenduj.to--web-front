<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside';

$tagsNav = 'nav--transparent';
$tagsTemplate = 'template--steps';

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

      <?php
      $userPhoto = 0;
      $campInvite = 0;
      $tasks = 1;
      $contentList = 1;

      include 'content/profile.php'

      ?>

    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php
  $masonry = true;

  include 'components/eof-scripts.php'
  ?>
</body>
</html>
