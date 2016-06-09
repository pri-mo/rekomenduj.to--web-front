<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile'; // platform-ios

$tagsNav = 'nav--transparent';
$tagsTemplate = 'template--contentlist template--polls';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include "elements/head.php" ?>
</head>

<?php echo "<body class='$tagsBodyBasic $tagsNav $tagsTemplate'>" ?>
  <!-- <img src="assets/images/phonegap.png" id="iOSbar" alt="" /> -->
  <?php include "elements/bof-scripts.php" ?>

  <div class="page__wrapper">

    <?php include 'elements/nav.php' ?>

    <main>

      <?php
      $contentItems = "promos";
      // $date = strftime("%A %e %B", strtotime("+2 days"));
      $itemLabelArray = [
        0 => "Kup pan bilet",
        1 => "Pyszne jagody",
        2 => "Promocja kończy się za 2 dni",
        // 2 => "{$date} to ostatni dzień promocji"
      ];
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
