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

      $step = 4; $stepMax = 5;
      $stepperHeader = 'Jesteśmy również platformą badawczą, <br>dlatego prosimy o uzupełnienie danych:';
      $stepperContent = <<<STEPPERCONTENT

      <div class="input input--select input--show-label">
        <select name="user-education" id="user-education" required>
          <option value="" selected disabled>Wybierz stopień</option>
          <option value="podstawowe">wykształcenie podstawowe</option>
          <option value="gimnazjalne">wykształcenie gimnazjalne</option>
          <option value="zasadnicze">wykształcenie zasadnicze</option>
          <option value="średnie">wykształcenie średnie</option>
          <option value="wyższe">wykształcenie wyższe</option>
        </select>
        <label for="user-education"
        data-focused="Moje wykształcenie"
        data-original="Podaj stopień swojego wykszłacenia"
        data-invalid="To pole jest obowiązkowe"></label>
      </div>

      <div class="input input--select input--show-label">
        <select name="user-locality" id="user-locality" required>
          <option value="" selected disabled>Wybierz zakres</option>
          <option value="500+">powyżej 500 tys. mieszkańców</option>
          <optgroup label="500 tysięcy mieszkańców">
            <option value="200-500">od 200 do 500 tys. mieszkańców</option>
            <option value="100-200">od 100 do 200 tys. mieszkańców</option>
            <option value="50-100">od 50 do 100 tys. mieszkańców</option>
          </optgroup>
          <optgroup label="50 tysięcy mieszkańców">
            <option value="10-50">między 10 a 50 tys. mieszkańców</option>
            <option value="5-10">między 5 a 10 tys. mieszkańców</option>
          </optgroup>
            <option value="5-">poniżej 5 tysięcy mieszkańców</option>
        </select>
        <label for="user-locality"
        data-focused="Moja miejscowość liczy..."
        data-original="Ilu mieszkańców liczy Twoja miejscowość?"
        data-invalid="To pole jest obowiązkowe"></label>
      </div>

      <div class="input input--select input--show-label">
        <select name="user-family" id="user-family" required>
          <option value="" selected disabled>Wybierz stopień</option>
          <option value="rodzic">Jestem rodzicem</option>
          <option value="przyszły rodzic">Spodziewamy się</option>
          <option value="bez dzieci">Nie posiadam dzieci</option>
        </select>
        <label for="user-family"
        data-focused="Moja rodzina"
        data-original="Czy masz dzieci?"
        data-invalid="To pole jest obowiązkowe"></label>
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
