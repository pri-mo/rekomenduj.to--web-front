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

    </main>

    <?php include 'public/components/footer.php' ?>
  </div>

  <?php include 'public/components/eof-scripts.php' ?>
</body>
</html>
