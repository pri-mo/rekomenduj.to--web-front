<?php

$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = '';
$tagsTemplate = 'template--contentlist template--campaigns';

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
  <?php include "components/head.php" ?>
</head>

<body class="<?php echo $tagsBodyBasic . ' ' . $tagsNav . ' ' . $tagsTemplate ?>">
  <!-- <img src="assets/images/phonegap.png" id="iOSbar" alt="" /> -->
  <?php include "components/bof-scripts.php" ?>

  <div class="page__wrapper">

    <?php include 'components/nav.php' ?>

    <main>

      <?php
      $headerIcon = 'rg-diary';
      $headerTitle = 'Pamiętnik kampanii';
      include("components/elements/diary_header.php");
      ?>

      <section class="layout--base">
        <?php
        $inputName = "input";
        include("components/elements/answer_longform.php");
        ?>

        <?php
        $title = "Moi rozmówcy";
        $questions = ["Liczba moich rozmówców", "Tyle osób, nie słyszało o produkcie"];
        $questionsOriginals = ["Podaj liczbę rozmówców?", "Ilu, nie znało produktu?"];
        include("components/elements/diary_block_numbers.php");
        ?>

        <?php
        $items = [['Próbki',1], ['Kupony',5], ['Ulotki', 10]];
        $title = "Prezenty dla znajomych";
        include("components/elements/diary_dropdown.php");
        ?>

        <?php
        $card = 0;
        include("components/elements/diary_load_image_cards.php");
        ?>

        <div class="layout--base buttons flow--right">
          <button class="button-diary" type="button" name="button">Wyczyść</button>
          <button class="button-diary" type="button" name="button">Zapisz</button>
        </div>
      </section>

      <?php
      $contentItems = "diary";
      $contentItemsCount = 10;

      include 'content/content-list.php'

      ?>
    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php
  include 'components/eof-scripts.php'
  ?>
</body>
</html>
