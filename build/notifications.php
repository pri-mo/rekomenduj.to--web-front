<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = 'nav--single';
$tagsTemplate = 'template--notifications';

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
      <div class="layout--base">
        <h3>Powiadomienia</h3>

        <ul class="notifs">
          <li><a href="#" class="notifs__item">
              <span class="rg-campaign notifs__item__icon"></span>
              <span class="notifs__item__cta" data-greeting="Zapraszamy Cię do kampanii">Jack Daniel's Tennessee Honey.</span>
              <span class="notifs__item__time">5 minut temu</span>
            </a></li>
          <li><a href="#" class="notifs__item">
              <span class="rg-poll notifs__item__icon"></span>
              <span class="notifs__item__cta" data-greeting="Masz nową ankietę do wypełnienia —">Twoje rodzinne śniadanie</span>
              <span class="notifs__item__time">Wczoraj</span>
            </a></li>
          <li><a href="#" class="notifs__item">
              <span class="rg-promotion notifs__item__icon"></span>
              <span class="notifs__item__cta" data-greeting="Dodaliśmy dla Ciebie nową promocję —">Bilet dla dwojga w sieci kin Multikino</span>
              <span class="notifs__item__time">3 dni temu (wtorek)</span>
            </a></li>
          <li><a href="#" class="notifs__item">
              <span class="rg-diary notifs__item__icon"></span>
              <span class="notifs__item__cta" data-greeting="Czekamy na Twój pierwszy wpis w kampanii">Knorr na lunch</span>
              <span class="notifs__item__time">25 lipca 2016</span>
            </a></li>
        </ul>
      </div>
    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php
  include 'components/eof-scripts.php'
  ?>
  <script>
    $(function() {
      $('.notifs__item').click(function(event) {
        $(this).toggleClass('notifs__item--unread');
      });
    });
  </script>
</body>
</html>
