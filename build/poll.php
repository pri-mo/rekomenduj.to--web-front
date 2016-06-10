<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile'; // platform-ios

$tagsNav = 'nav--single';
$tagsTemplate = 'template--contentlist template--poll';

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
      // $set defaults

      include 'content/poll_question.php'

      ?>

    </main>

    <?php include 'elements/footer.php' ?>
  </div>

  <?php
  include 'elements/eof-scripts.php'
  ?>
</body>
</html>
