<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile';

$tagsNav = 'nav--transparent';
$tagsTemplate = 'template--profile--empty';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include 'elements/head.php' ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <?php include 'elements/bof-scripts.php' ?>

  <div class="page__wrapper">

    <?php include 'elements/nav.php' ?>

    <main>

      <?php
      $userPhoto = 1;
      $campInvite = 0;
      $tasks = 0;
      $contentList = 0;

      include 'content/profile.php'

      ?>

    </main>

    <?php include 'elements/footer.php' ?>
  </div>

  <?php
  $masonry = true;

  include 'elements/eof-scripts.php'
  ?>
</body>
</html>
