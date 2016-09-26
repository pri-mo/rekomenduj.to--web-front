<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside';

$tagsNav = '';
$tagsTemplate = 'template--steps';

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

      $step = 2; $stepMax = 5;
      $stepperHeader = 'Teraz podstawowe dane kontaktowe...';
      $stepperContent = <<<STEPPERCONTENT

      <div class="input">
        <input tabindex name="email" id="user-email" type="email" autocomplete="email" required spellcheck="false" placeholder="email@domena.pl">
        <label for="user-email"
        data-focused="Mój email"
        data-original="Podaj swój e-mail"
        data-invalid="Podaj poprawny e-mail">Podaj swój e-mail</label>
      </div>

      <div class="input">
        <input tabindex name="user-phone" id="user-phone" type="tel" autocomplete="tel"
        pattern="[0-9]{9}|[0-9]{4}[0-9]{9}|\+[0-9]{2}[0-9]{9}"
        spellcheck="false" placeholder="np. 600500400">
        <label for="user-phone"
        data-focused="Mój numer komórkowy"
        data-original="Podaj numer komórkowy"
        data-invalid="Poprawny numer to np. +48600500400">Podaj numer komórkowy</label>
      </div>

STEPPERCONTENT;

      include 'content/firsttime.php'

      ?>

    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php include 'components/eof-scripts.php' ?>
</body>
</html>
