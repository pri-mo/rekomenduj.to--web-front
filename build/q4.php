<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = 'nav--single';
$tagsTemplate = 'template--poll';

// Grab URL Vars
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $parts = parse_url($url);
if ( isset($parts['query']) ) {
  parse_str($parts['query'], $query);
  $q = $query['q'];
} else {
  $q = 1;
}

$multiple = false;
$answerType = "pick";
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
        $q = 4;
        $multiple = 0;
        $answerType = "kids";
        $questionIntro = "Specjalnie przygotowany zestaw";
        $questionCall = "Pytanie jednokrotnego wyboru o status rodziny.";
        include 'content/poll_question.php'

      ?>

    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php
  include 'components/eof-scripts.php'
  ?>
</body>
</html>
