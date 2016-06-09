<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile'; // platform-ios

$tagsNav = 'nav--transparent';
$tagsTemplate = 'template--contentlist template--polls';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include 'elements/head.php' ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <!-- <img src="assets/images/phonegap.png" id="iOSbar" alt="" /> -->
  <?php include 'elements/bof-scripts.php' ?>

  <div class="page__wrapper">

    <?php include 'elements/nav.php' ?>

    <main>

      <?php
      $contentItems = "polls";
      // $contentItemsCount = 10;

      include 'content/content-list.php'

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
