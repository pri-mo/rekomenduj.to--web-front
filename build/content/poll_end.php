<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
date_default_timezone_set("Europe/Warsaw");

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('pl_PL');
?>

<section class="layout--base poll__info">
  <div class="poll__icon" data-icon="s"></div>
  <div class="poll__name" data-label="Ankieta ukończona"><?php echo $faker->sentence; ?></div>
</section>

<section class="layout--base poll__thankyou thankyou--swap"> <!-- klasa thankyou--swap zamienie kolejność media i text -->
  <div class="thankyou__media">
    <!-- <div class="media__embed">
      <div class="fb-page" data-href="https://www.facebook.com/Rekomendujto-426718860729095/" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
    </div> -->
    <!-- <div class="media__img"><img src="https://unsplash.it/500/?image=1083" alt=""></div> -->
    <div class="media__vid"><iframe src="https://www.youtube.com/embed/Wk5qT_814xM" frameborder="0" allowfullscreen></iframe></div>
  </div>
  <div class="thankyou__text">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium impedit doloribus distinctio ipsa eveniet, earum voluptatum voluptatibus aperiam? Velit, quia! Sunt aliquam ullam, voluptatibus officia fugit tenetur quas similique autem.</p>
  </div>
</section>

<section class="layout--base poll__nav">
  <a href="profile-with-photo.php" class="button">Do profilu</a>
</section>
