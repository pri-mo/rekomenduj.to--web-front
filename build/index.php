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

      <section class="layout__container grid__wrapper">
        <div class="grid__item grid__xs-span--6 grid__span--3">
          <a href="" class="comp__hero-link tint-cover">
            <img class="image--cover" src="assets/images/backs/ph1.jpg" alt="">
            <span class="text--cta">Jesteś influencerem?</span>
          </a>
        </div>
        <div class="grid__item grid__xs-span--6 grid__span--3">
          <a href="" class="comp__hero-link tint-cover">
            <img class="image--cover" src="assets/images/backs/ph3.jpg" alt="">
            <span class="text--cta">Masz pytania?</span>
          </a>
        </div>
        <div class="grid__item grid__xs-span--6 grid__span--3">
          <a href="" class="comp__hero-link tint-cover">
            <img class="image--cover" src="assets/images/backs/ph6.jpg" alt="">
            <span class="text--cta">Poznaj nasze akcje...</span>
          </a>
        </div>
        <div class="grid__item grid__xs-span--6 grid__span--3">
          <a href="" class="comp__hero-link tint-cover">
            <img class="image--cover" src="assets/images/backs/ph9.jpg" alt="">
            <span class="text--cta">Chcesz zorganizować własną kampanię?</span>
          </a>
        </div>
      </section>

      <section class="layout__container grid__wrapper grid--simple-rwd">
        <div class="grid__item grid__span--3 comp__stat">
          <div class="grid__content">
            <div class="stat__content--num">6,7 mln</div>
            <div class="stat__content--desc">Znajomych, którzy przetestowali produkty w kampaniach Rekomenduj.to</div>
          </div>
        </div>
        <div class="grid__item grid__span--3 comp__stat">
          <div class="grid__content">
            <div class="stat__content--num">86,5 tys.</div>
            <div class="stat__content--desc">Blogerów w naszej społeczności</div>
          </div>
        </div>
        <div class="grid__item grid__span--3 comp__stat">
          <div class="grid__content">
            <div class="stat__content--num">386,6 tys.</div>
            <div class="stat__content--desc">Produktów testowanych przez naszą społeczność</div>
          </div>
        </div>
        <div class="grid__item grid__span--3 comp__stat">
          <div class="grid__content">
            <div class="stat__content--num">12,3 mln</div>
            <div class="stat__content--desc">Wypowiedzi Ambasadorów naszych akcji</div>
          </div>
        </div>

      </section>

    </main>

    <?php include 'public/components/footer.php' ?>
  </div>

  <?php include 'public/components/eof-scripts.php' ?>
</body>
</html>
