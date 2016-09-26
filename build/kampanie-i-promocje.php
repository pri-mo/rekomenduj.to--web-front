<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = '';
$tagsTemplate = 'template--contentlist template--campaigns';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include "components/head.php" ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <!-- <img src="assets/images/phonegap.png" id="iOSbar" alt="" /> -->
  <?php include "components/bof-scripts.php" ?>

  <div class="page__wrapper">

    <?php include 'components/nav.php' ?>

    <main>

      <?php
      $contentItems = "campaigns";
      $contentItemsCount = 2;

      include("content/content-list.php");
      ?>

      <?php
      $contentItems = "promos";
      // $date = strftime("%A %e %B", strtotime("+2 days"));
      $itemLabelArray = [
        0 => "Kup pan bilet",
        1 => "Pyszne jagody",
        2 => "Promocja kończy się za 2 dni",
        // 2 => "{$date} to ostatni dzień promocji"
      ];
      $contentItemsCount = 8;

      include("content/content-list.php");

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
