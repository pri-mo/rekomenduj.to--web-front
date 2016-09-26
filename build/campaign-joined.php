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
                  <a href="" class="button">Click me...</a>
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
        </div>
      </section>

      <div class="campaign__content">
        <section class="layout--base content-list__header">
          <?php
          $headerIcon = 'rg-influencer';
          $headerTitle = 'Zadania w kampanii';
          ?>
          <div class="<?php echo $headerIcon ?> content-list__header-icon"></div>
          <h2 class="content-list__header-title"><?php echo $headerTitle ?></h2>
        </section>
        <section class="campaign__tasks">
          <a href="" class="campaign__tasks__item task--facebook">
            <span class="task__mission">Dołącz do nas na</span><span class="task__target">Facebooku</span><span class="task__icon"></span>
          </a>
          <a href="https://www.instagram.com/rekomendujto/" class="campaign__tasks__item task--instagram">
            <span class="task__mission">Dołącz do nas na</span><span class="task__target">Instagramie</span><span class="task__icon"></span>
          </a>
          <a href="" class="campaign__tasks__item task--google-plus">
            <span class="task__mission">Dołącz do nas na</span><span class="task__target">Google+</span><span class="task__icon"></span>
          </a>
          <a href="" class="campaign__tasks__item task--other">
            <span class="task__mission">Zostaw recenzję na</span><span class="task__target">Ceneo</span><span class="task__icon"></span>
          </a>
        </section>
        <section class="content-list campaign__priority">


          <div class="list-item list-item--doublesided priority__item priority--share" id="promoShare_01">
            <div class="doublesided__flipper">
              <div class="doublesided__side-a" onclick="flipOver('promoShare_01')">
                <img src="https://unsplash.it/600/500?image=999" alt="" class="image--cover">
                <div class="doublesided__trigger ripple">Udostępnij ten post<span class="rg-share"></span></div>
                <div class="priority--share__post-snippet">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam dolor, impedit deserunt recusandae cum eveniet possimus odit! Modi, rerum. Voluptates commodi at nam cum aspernatur neque expedita, incidunt consectetur inventore!</div>
              </div>
              <div class="doublesided__side-b">
                <div class="priority--share__post-preview">
                  <img src="https://unsplash.it/100/100?image=999" alt="" class="post-preview__image">
                  <div class="post-preview__title">Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur.</div>
                  <div class="post-preview__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                </div>
                <div class="doublesided__trigger ripple" onclick="flipOver('promoShare_01')"><span class="rg-left"></span></div>
                <div class="priority--share__social-channels">
                  <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Udostępnij</a></div>
                </div>
              </div>
            </div>
          </div>

          <div class="list-item list-item--doublesided priority__item priority--hashtag" id="promoHash_01">
            <div class="doublesided__flipper">
              <div class="doublesided__side-a" onclick="flipOver('promoHash_01')">
                <img src="https://unsplash.it/600/500?image=1" alt="" class="image--cover">
                <div class="doublesided__trigger ripple">Puść własny post<span class="rg-send-go"></span></div>
                <div class="priority--hashtag__cta"><span>Wkręcasz szefa, że coś robisz ale tak naprawdę opierdalasz się sromotnie?</span> Hashtag <strong>#NaRobocie</strong></div>
              </div>
              <div class="doublesided__side-b">
                <div class="input input--file-upload priority--hashtag__upload">
                  <img src="" class="file-upload__file-preview">
                  <input type="file" name="file" id="file" class="input--file-upload__control">
                  <label for="file">
                    <span class="rg-add-photo file-upload__icon"></span>
                    <span class="file-upload__cta">Wybierz zdjęcie...</span>
                    <span class="file-upload__file-size"></span>
                  </label>
                </div>
                <!-- TODO Added input--focus-green class -->
                <div class="input--focus-green input--tight-text priority--hashtag__text">
                  <textarea tabindex name="hashtagPostText" id="hashtagPostText" spellcheck="true" placeholder="Ta historia jest o Tobie..."></textarea>
                  <label for="hashtagPostText"
                  data-focused="#NaRobocie"
                  data-original="Co tam #NaRobocie?"
                  data-invalid="Twoja odpowiedź jest dla nas ważna"></label>
                  <div class="input__field"></div>
                </div>
                <div class="priority--hashtag__social-channels">
                  <div onclick="this.classList.toggle('item--active')" class="social-channels__item item--facebook"><span class="sr-facebook"></span></div>
                  <div onclick="this.classList.toggle('item--active')" class="social-channels__item item--twitter"><span class="sr-twitter"></span></div>
                  <div onclick="this.classList.toggle('item--active')" class="social-channels__item item--google"><span class="sr-google-plus"></span></div>
                  <a href="" class="priority--hashtag__share-button"><span class="rg-send-go"></span></a href="">
                </div>
                <div class="doublesided__trigger ripple" onclick="flipOver('promoHash_01')"><span class="rg-left"></span></div>
              </div>
            </div>
          </div>
          <!-- <a class="list-item"></a> -->
          <!-- <a class="list-item"></a> -->
        </section>

        <section class="layout--base content-list__header">
          <?php
          $headerIcon = 'rg-community';
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
  <!-- TODO Javascript for file input and classes -->
  <script>
    var inputs = document.querySelectorAll( '.input--file-upload__control' );
    Array.prototype.forEach.call( inputs, function( input )
    {
      var label     = document.querySelectorAll( '.file-upload__cta' )[0],
          labelSize = document.querySelectorAll( '.file-upload__file-size' )[0],
          preview   = document.querySelectorAll( '.file-upload__file-preview' )[0],
          labelVal  = label.innerHTML;

      input.addEventListener( 'change', function( e ) {
        var fileName = e.target.value.split( '\\' ).pop(),
            files = e.target.files,
            fileSize = files[0].size / 1024 / 1024;
            reader = new FileReader();

        reader.onload = function(e) {
          preview.setAttribute('src', e.target.result);
          preview.classList.add('image--cover');
          preview.parentElement.classList.add('cover__container');
        }

        if ( fileName ) {
          label.innerHTML = 'Dodaj opis i opublikuj...';
          labelSize.innerHTML = Math.round(fileSize * 100) / 100 + "MB";
          reader.readAsDataURL(files[0]);
        } else {
          labelVal = 'Wybierz zdjęcie...';
        }
      });
    });
  </script>
</body>
</html>
