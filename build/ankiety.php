<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = '';
$tagsTemplate = 'template--contentlist template--poll-list';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include 'components/head.php' ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <!-- <img src="assets/images/phonegap.png" id="iOSbar" alt="" /> -->
  <?php include 'components/bof-scripts.php' ?>

  <div class="page__wrapper">

    <?php include 'components/nav.php' ?>

    <main>

      <?php
      $contentItems = "polls";
      $contentItemsCount = 4;

      include 'content/content-list.php'

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
