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

      $step = 3; $stepMax = 5;
      $stepperHeader = 'Dokąd mamy wysłać Ci pierwszą <br>Paczkę Ambasadora?';
      $stepperContent = <<<STEPPERCONTENT

      <div class="input">
        <input tabindex name="user-addr-street" id="user-addr-street" type="text" autocomplete="address-line1"
        required
        spellcheck="false" placeholder="ul. Kubusia Puchatka">
        <label for="user-addr-street"
        data-focused="Moja ulica"
        data-original="Podaj nazwę ulicy"
        data-invalid="To pole jest wymagane"></label>
      </div>

      <div class="grid__container grid--gutter">
        <div class="grid__item grid__item--1of2">
        <div class="input">
          <input tabindex name="user-addr-house" id="user-addr-house" type="text" autocomplete="address-line2"
          required
          spellcheck="false" placeholder="domu, klatki...">
          <label for="user-addr-house"
          data-focused="Numer domu"
          data-original="Nr domu"
          data-invalid="To pole jest wymagane"></label>
        </div>
        </div>

        <div class="grid__item grid__item--1of2">
        <div class="input">
          <input tabindex name="user-addr-flat" id="user-addr-flat" type="text" autocomplete="address-line2"
          spellcheck="false" placeholder="...">
          <label for="user-addr-flat"
          data-focused="Numer mieszkania"
          data-original="Nr mieszkania"
          data-invalid="Numer mieszkania"></label>
        </div>
        </div>
      </div>

      <div class="grid__container grid--gutter">
        <div class="grid__item grid__item--1of2">
        <div class="input">
          <input tabindex name="user-addr-zip" id="user-addr-zip" type="text" autocomplete="postal-code"
          required pattern="[0-9]{2} [0-9]{3}|[0-9]{2}-[0-9]{3}"
          spellcheck="false" placeholder="np. 71-218">
          <label for="user-addr-zip"
          data-focused="Mój kod pocztowy"
          data-original="Kod pocztowy"
          data-invalid="Niepoprawny kod"></label>
        </div>
        </div>

        <div class="grid__item grid__item--1of2">
        <div class="input">
          <input tabindex name="user-addr-city" id="user-addr-city" type="text" autocomplete="address-level2"
          required
          spellcheck="false" placeholder="np. Wąchock">
          <label for="user-addr-city"
          data-focused="Mój miasto"
          data-original="Miejscowość"
          data-invalid="To pole jest wymagane"></label>
        </div>
        </div>
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
