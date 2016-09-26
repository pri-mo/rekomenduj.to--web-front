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

      $step = 1; $stepMax = 5;
      $stepperHeader = 'Podaj swoje imię i nazwisko, <br>datę urodzenia oraz płeć.';
      $maxDate = date('Y-m-d', strtotime('-14 years'));
      $stepperContent = <<<STEPPERCONTENT

      <div class="input">
        <input tabindex
        name="user-name" id="user-name" type="text"
        autocomplete="given-name"
        required
        spellcheck="true"
        placeholder="Jak masz na imię?">
        <label for="user-name"
        data-focused="Mam na imię"
        data-original="Jak masz na imię?"
        data-invalid="To pole jest wymagane.">Jak masz na imię?</label>
      </div>

      <div class="input">
        <input tabindex
        name="user-lastname" id="user-lastname" type="text"
        autocomplete="family-name"
        required
        spellcheck="true"
        placeholder="Jak masz na imię?">
        <label for="user-lastname"
        data-focused="Mam na nazwisko"
        data-original="Jak masz na nazwisko?"
        data-invalid="To pole jest wymagane.">Jak masz na nazwisko?</label>
      </div>

      <div class="grid__container grid--gutter">
        <div class="grid__item grid__item--1of2">
          <div class="input input--date input--show-label">
            <input tabindex
            name="user-birthday" id="user-birthday" type="text" max="{$maxDate}"
            autocomplete="birthday"
            required
            spellcheck="true"
            placeholder="Podaj datę">
            <label for="user-birthday"
            data-focused="Moja data urodzenia"
            data-original="Podaj datę urodzenia"
            data-invalid="To pole jest wymagane.">Data urodzenia</label>
          </div>
        </div>

        <div class="grid__item grid__item--1of2">
          <div class="input input--select input--show-label">
            <select name="user-gender" id="user-gender" required>
              <option value="" selected disabled>Podaj płeć</option>
              <option value="K">Kobieta</option>
              <option value="M">Mężczyzna</option>
            </select>
            <label for="user-gender"
            data-focused="Moja płeć"
            data-original="Podaj swoją płeć"
            data-invalid="To pole jest obowiązkowe">Podaj swoją płeć</label>
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
