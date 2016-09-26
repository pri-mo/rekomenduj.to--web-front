<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('pl_PL');
$lang = 'pl';

$tagsBodyBasic = 'preload device--mobile scope--inside'; // platform-ios

$tagsNav = '';
$tagsTemplate = 'template--campaign';
$randomImage = $faker->numberBetween($min = 900, $max = 1000);
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
        <!-- Swiper -->
        <div class="cs__container">
          <div class="swiper-wrapper">
          <div class="swiper-slide cs__item cs__item--video" id="cslider-0">
              <div class="video-embed">
                <iframe src="https://www.youtube.com/embed/frdj1zb9sMY" frameborder="0" allowfullscreen></iframe>
              </div>
            </div>
          <?php
            for ($i=1; $i < 6; $i++) {
              $dispImage = $randomImage + $i;
              $slideNumber = "cslider-" . $i;
            ?>
            <div class="swiper-slide cs__item" id="<?php echo $slideNumber ?>">
              <img class="image--cover" alt="" src="https://unsplash.it/500/?image=<?php echo $dispImage ?>" />
            </div>
            <?php } ?>
            <div class="swiper-slide cs__item" id="csslider-6">
              <div class="cslider__txt-content">
                <h3>Hi there!!!</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum reiciendis iusto odit cum labore officiis suscipit, itaque quod, quis nesciunt accusantium corporis, soluta libero facere! Itaque vitae libero natus nesciunt?</p>
                <div>
                  <a class="button">Click me...</a>
                </div>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="cs__pagination"></div>
        </div>

        <div class="campaign__intro">
          <h2 class="campaign__name">Jack Daniel's Tennessee Honey</h2>
          <div class="campaign__description">
          <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Consectetur optio odio voluptates quibusdam asperiores fugiat reprehenderit ipsa delectus assumenda iure, quaerat. At assumenda alias dolor et reiciendis explicabo sequi beatae.</p>
          <ol>
            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
            <li>Ratione alias rerum enim labore ducimus, in iste.</li>
            <li>Iusto in, fugiat est quam ducimus provident, quasi ipsum maiores dignissimos quidem doloremque aut.</li>
          </ol>
          </div>
          <a href="" class="link__toggle-more"><span class="rg-right"></span>Czytaj więcej</a>

          <div class="space--top">
            <a href="campaign-joined.php" class="button button--cta">Chcę wziąć udział...</a>
          </div>
        </div>
      </section>

      <div class="campaign__content">
        <section class="layout--base content-list__header">
          <?php
          $headerIcon = 'rg-community';
          $headerTitle = 'Bądź częścią tej społeczności';
          ?>
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

          <a href="" class="list-item social-feed__item item--facebook">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--facebook">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--instagram">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">@SomeOneElse</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--twitter">
            <span class="social-feed__text">Lorem ipsum dolor sit amet, <em>#consectetur</em> adipiscing elit. Donec scelerisque mauris nec libero volutpat rutrum. Etiam interdum massa volutpat.</span>
            <span class="social-feed__details" data-timestamp="3 sie 2016">@LipsumBot</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--instagram">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">@SomeOneElse</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--facebook">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--facebook">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--facebook">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">Kaśka</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--instagram">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">@SomeOneElse</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--instagram">
            <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('400', '300'))?>/<?php echo $faker->randomElement($array = array ('400', '300'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover">
            <span class="social-feed__details" data-timestamp="3 sie 2016">@SomeOneElse</span>
            <span class="social-feed__icon"></span>
          </a>
          <a href="" class="list-item social-feed__item item--twitter">
            <span class="social-feed__text">Lorem ipsum dolor sit amet, <em>#consectetur</em> adipiscing elit. Donec scelerisque mauris nec libero volutpat rutrum. Etiam interdum massa volutpat.</span>
            <span class="social-feed__details" data-timestamp="3 sie 2016">@LipsumBot</span>
            <span class="social-feed__icon"></span>
          </a>
        </section>

        <section class="layout--base content-list__header">
          <?php
          $headerIcon = 'rg-influencer';
          $headerTitle = 'To mówią Ambasadorzy';
          ?>
          <div class="<?php echo $headerIcon ?> content-list__header-icon"></div>
          <h2 class="content-list__header-title"><?php echo $headerTitle ?></h2>
        </section>
        <section class="content-list diary-entries">
          <div class="list-item diary-entry">
            <div class="diary-entry__timestamp">3 sie 2016</div>
            <div class="diary-entry__user">
              <div class="user__avatar"><img src="assets/images/spoof-profile-pic.jpg"></div>
              <div class="user__name">Nina Todd</div>
            </div>
            <div class="diary-entry__content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet itaque nulla, neque illo, nesciunt expedita? Consequatur, praesentium quas maxime reprehenderit autem atque, architecto alias velit tempora eos dignissimos, odio adipisci!</p>
            </div>
            <a class="diary-entry__more"><span class="rg-more"></span></a>
          </div>

          <div class="list-item diary-entry">
            <div class="diary-entry__timestamp">3 sie 2016</div>
            <div class="diary-entry__user">
              <div class="user__avatar"><img src="assets/images/spoof-profile-pic.jpg"></div>
              <div class="user__name">Nina Todd</div>
            </div>
            <div class="diary-entry__content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet itaque nulla, neque illo, nesciunt expedita? Consequatur, praesentium quas maxime reprehenderit autem atque, architecto alias velit tempora eos dignissimos, odio adipisci!</p>
            </div>
            <a class="diary-entry__more"><span class="rg-more"></span></a>
          </div>
        </section>
      </div>

    </main>

    <?php include 'components/footer.php' ?>
  </div>

  <?php
  include 'components/eof-scripts.php'
  ?>
  <!-- Initialize Swiper -->
  <script>
  var swiper = new Swiper('.cs__container', {
    pagination: '.cs__pagination',
      slidesPerView: 1,
      paginationClickable: true,
      spaceBetween: 0,
      roundLengths: true
    });
  </script>
</body>
</html>
