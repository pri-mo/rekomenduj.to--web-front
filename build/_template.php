<?php

$lang = 'pl';

$tagsBodyBasic = 'preload scope--outside device--mobile';

$tagsNav = '';
$tagsTemplate = 'template--public';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include 'public/components/head.php' ?>
  <meta http-equiv="refresh">
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <?php include 'public/components/bof-scripts.php' ?>

  <div class="page__wrapper">

    <?php include 'public/components/nav.php' ?>

    <main>

      <!-- Content here -->

    </main>

    <?php include 'public/components/footer.php' ?>
  </div>

  <?php include 'public/components/eof-scripts.php' ?>
</body>
</html>
