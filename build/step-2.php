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

      $step = 2; $stepMax = 5;
      $stepperHeader = 'Teraz podstawowe dane kontaktowe...';
      $stepperContent = <<<STEPPERCONTENT

      <div class="input">
        <input tabindex name="user-email" id="user-email" type="email" autocomplete="email" required spellcheck="false" value="hi@przemektrepka.pl" placeholder="email@domena.pl">
        <label for="user-email"
        data-focused="Mój email"
        data-original="Podaj swój e-mail"
        data-invalid="Podaj poprawny e-mail">Podaj swój e-mail</label>
      </div>

      <div class="input">
        <input tabindex name="user-phone" id="user-phone" type="phone" autocomplete="tel"
         pattern="[0-9]{9}|[0-9]{3} [0-9]{3} [0-9]{3}|[0-9]{3}-[0-9]{3}-[0-9]{3}"
        spellcheck="false" placeholder="np. 600 500 400">
        <label for="user-phone"
        data-focused="Mój numer komórkowy"
        data-original="Podaj numer komórkowy"
        data-invalid="Poprawny numer to 9 cyfr...">Podaj numer komórkowy</label>
      </div>

STEPPERCONTENT;

      include 'content/firsttime.php'

      ?>

    </main>

    <?php include 'elements/footer.php' ?>
  </div>

  <?php include 'elements/eof-scripts.php' ?>
</body>
</html>
