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

      <section class="layout__container grid__container">
        <div class="grid__item grid__span--6">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis laborum fuga tempora, mollitia obcaecati sunt, quae explicabo blanditiis non adipisci nostrum consequuntur repellat. Illum fugit tempora sunt consectetur pariatur sapiente.</p>
        </div>
        <div class="grid__item grid__span--6" style="background-color: #8d9">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero rerum est molestiae odit ab nostrum placeat veniam rem ullam esse, atque deleniti dolor corporis eaque repudiandae tenetur, possimus, praesentium illum?</p>
        </div>
      </section>

    </main>

    <?php include 'public/components/footer.php' ?>
  </div>

  <?php include 'public/components/eof-scripts.php' ?>
</body>
</html>
