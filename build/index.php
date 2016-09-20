<?php

$lang = 'pl';

$tagsBodyBasic = 'preload scope--outside device--mobile';

$tagsNav = '';
$tagsTemplate = 'template--public template--full-width template--home';

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

      <section class="layout--base header">
        <div class="header__container">
          <div class="header__background"></div>
          <div class="layout__container header__content">
            <h1>Niezwykła siła zwykłych rozmów.</h1>
            <h3>A Ty, co dzisiaj polecisz?</h3>
            <div class="header__buttons">
              <a href="" class="button">Zaloguj się</a>
              <a href="" class="button button--cta force--cta">Zarejestruj się</a>
            </div>
          </div>
        </div>
      </section>

      <section class="layout__container grid__wrapper grid--simple-rwd">
        <div class="grid__item grid__span--4 comp__feature">
          <div class="grid__content">
            <h2><span class="rg-user"></span>Dołączasz</h2>
            <p>Zarejestruj się i wybierz akcję, która Ci się spodoba.</p>
          </div>
        </div>
        <div class="grid__item grid__span--4 comp__feature">
          <div class="grid__content">
            <h2><span class="rg-campaign"></span>Zyskujesz</h2>
            <p>Mamy dla Ciebie produkty lub ciekawe promocje.</p>
          </div>
        </div>
        <div class="grid__item grid__span--4 comp__feature">
          <div class="grid__content">
            <h2><span class="rg-community"></span>Polecasz</h2>
            <p>Testuj, dziel się, rozmawiaj i polecaj innym!</p>
          </div>
        </div>
      </section>

      <div class="layout__container grid__wrapper grid--no-gutter">
        <div class="grid__item grid__xs-span--6 grid__span--3">
          <img class="image--cover" src="assets/images/backs/ph1.jpg" alt="">
          <div class="grid__content">111</div>
        </div>
        <div class="grid__item grid__xs-span--6 grid__span--3">
          <img class="image--cover" src="assets/images/backs/ph3.jpg" alt="">
          <div class="grid__content">111</div>
        </div>
        <div class="grid__item grid__xs-span--6 grid__span--3">
          <img class="image--cover" src="assets/images/backs/ph6.jpg" alt="">
          <div class="grid__content">111</div>
        </div>
        <div class="grid__item grid__xs-span--6 grid__span--3">
          <img class="image--cover" src="assets/images/backs/ph9.jpg" alt="">
          <div class="grid__content">111</div>
        </div>
      </div>

    </main>

    <?php include 'public/components/footer.php' ?>
  </div>

  <?php include 'public/components/eof-scripts.php' ?>
</body>
</html>
