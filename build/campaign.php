<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('pl_PL');
$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile'; // platform-ios

$tagsNav = '';
$tagsTemplate = 'template--campaign';

$headerIcon = 'rg-community';
$headerTitle = 'Bądź częścią tej społeczności';
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
    <section class="layout--base layout__header--campaign">
      <div class="campaign__slider">
        <ul>
          <li>
            <a href="" class="slider__item"><img src="assets/images/placeholder.png" class="free dev__placeholder-image" alt=""></a>
          </li>
          <li>
            <a href="" class="slider__item"><img src="assets/images/placeholder.png" class="free dev__placeholder-image" alt=""></a>
          </li>
          <li>
            <a href="" class="slider__item"><img src="assets/images/placeholder.png" class="free dev__placeholder-image" alt=""></a>
          </li>
        </ul>
      </div>
      <div class="campaign__intro">
        <h2 class="campaign__name">Jack Daniel's Tennessee Honey</h2>
        <p class="campaign__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur optio
          odio voluptates quibusdam asperiores fugiat reprehenderit ipsa delectus assumenda iure, quaerat. At assumenda
          alias dolor et reiciendis explicabo sequi beatae.
          <a href="" class="link__toggle-more"><span class="rg-right"></span>Czytaj więcej</a>
        </p>
      </div>
    </section>

    <div class="campaign__content">
      <section class="layout--base content-list__header">
        <div class="<?php echo $headerIcon ?> content-list__header-icon"></div>
        <h2 class="content-list__header-title"><?php echo $headerTitle ?></h2>
      </section>
      <section class="campaign__tasks">
        <a href="" class="campaign__tasks__item task--facebook">
          <span class="task__mission">Dołącz do nas na</span><span class="task__target">Facebooku</span><span class="task__icon"></span>
        </a>
        <a href="" class="campaign__tasks__item task--instagram">
          <span class="task__mission">Dołącz do nas na</span><span class="task__target">Instagramie</span><span class="task__icon"></span>
        </a>
        <a href="" class="campaign__tasks__item task--google-plus">
          <span class="task__mission">Dołącz do nas na</span><span class="task__target">Google+</span><span class="task__icon"></span>
        </a>
        <a href="" class="campaign__tasks__item task--other">
          <span class="task__mission">Zostaw recenzję na</span><span class="task__target">Ceneo</span><span class="task__icon"></span>
        </a>
      </section>
      <section class="content-list campaign__social-feed">
        <div class="list-sizer"></div>
        <a href="" class="list-item social-feed__item item--facebook">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--facebook">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--instagram">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">@SomeOneElse</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--twitter">
          <span class="social-feed__text">Lorem ipsum dolor sit amet, <em>#consectetur</em> adipiscing elit. Donec scelerisque mauris nec libero volutpat rutrum. Etiam interdum massa volutpat.</span>
          <span class="social-feed__details" data-timestamp="3 sie 2016">@LipsumBot</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--instagram">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">@SomeOneElse</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--facebook">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--facebook">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--facebook">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--instagram">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">@SomeOneElse</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--instagram">
          <img src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
          <span class="social-feed__details" data-timestamp="3 sie 2016">@SomeOneElse</span>
          <span class="social-feed__icon"></span>
        </a>
        <a href="" class="list-item social-feed__item item--twitter">
          <span class="social-feed__text">Lorem ipsum dolor sit amet, <em>#consectetur</em> adipiscing elit. Donec scelerisque mauris nec libero volutpat rutrum. Etiam interdum massa volutpat.</span>
          <span class="social-feed__details" data-timestamp="3 sie 2016">@LipsumBot</span>
          <span class="social-feed__icon"></span>
        </a>
      </section>
    </div>

  </main>

  <?php include 'components/footer.php' ?>
</div>

<?php
include 'components/eof-scripts.php'
?>
</body>
</html>
