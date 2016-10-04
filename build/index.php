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
          <div class="video__container">
            <video autoplay loop="true" width="100%" height="100%">
              <source type="video/mp4" src="/assets/cover-video.mp4">
            </video>
          </div>

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

      <section class="layout__container grid__wrapper grid--simple-rwd">
        <div class="grid__item grid__span--6">
          <div href="" class="comp__rich-feature">
            <div class="rich-feature__back-image"><img class="image--cover" src="assets/images/home-akcje.jpg" alt=""></div>
            <div class="rich-feature__content">
              <h3 class="headline">Poznaj nasze akcje...</h3>
              <p><strong>2,5 mln osób</strong> wzięło udział w naszych akcjach. Zobacz jakie kampanie zrealizowaliśmy.</p>
              <div class="flow--left"><a href="#dontmove" class="button">Nasze kampanie</a></div>
            </div>
          </div>
        </div>
        <div class="grid__item grid__span--6">
          <div href="" class="comp__rich-feature">
            <div class="rich-feature__back-image"><img class="image--cover" src="assets/images/home-blogger.jpg" alt=""></div>
            <div class="rich-feature__content">
              <h3 class="headline">Jesteś influencerem?</h3>
              <p>Nasza społeczność influencerów dociera do <strong>12 mln osób</strong>. Bądź jednym z nich i bierz udział w naszych kampaniach! </p>
              <div class="flow--left"><a href="#dontmove" class="button">Poznaj szczegóły</a></div>
            </div>
          </div>
        </div>
        <div class="grid__item grid__span--6">
          <div href="" class="comp__rich-feature">
            <div class="rich-feature__back-image"><img class="image--cover" src="assets/images/home-kampania.jpg" alt=""></div>
            <div class="rich-feature__content">
              <h3 class="headline">Chcesz zorganizować własną kampanię?</h3>
              <p>Wygenerowaliśmy <strong>ponad 130 tys. insightów</strong> na temat testowanych produktów. Postaw na marketing rekomendacji i poznaj niezwykłą siłę swoich konsumentów. </p>
              <div class="flow--left"><a href="#dontmove" class="button">Twoja kampania</a></div>
            </div>
          </div>
        </div>
        <div class="grid__item grid__span--6">
          <div href="" class="comp__rich-feature">
            <div class="rich-feature__back-image"><img class="image--cover" src="assets/images/home-questions.jpg" alt=""></div>
            <div class="rich-feature__content">
              <h3 class="headline">Masz pytania?</h3>
              <p><strong>85% Polaków rekomenduje produkty swoim znajomym</strong>. Wierzymy w siłę marketingu rekomendacji. Dowiedz się na czym polegają nasze akcje i jak zostać Ambasadorem swoich ulubionych marek.</p>
              <div class="flow--left"><a href="#dontmove" class="button">Poznaj odpowiedzi</a></div>
            </div>
          </div>
        </div>
      </section>

    </main>

    <?php include 'public/components/footer.php' ?>
  </div>

  <?php include 'public/components/eof-scripts.php' ?>
</body>
</html>
