<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile';

$tagsNav = 'nav--transparent';
$tagsTemplate = 'template--steps';

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

      $step = 6; $stepMax = 5;

      include 'content/firsttime.php'

      ?>

    </main>

    <?php include 'elements/footer.php' ?>
  </div>

  <?php include 'elements/eof-scripts.php' ?>
</body>
</html>
