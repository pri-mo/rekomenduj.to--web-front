<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside';

$tagsNav = '';
$tagsTemplate = 'template--profile--empty';

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
      $userPhoto = 1;
      $campInvite = 0;
      $tasks = 0;
      $contentList = 0;

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
