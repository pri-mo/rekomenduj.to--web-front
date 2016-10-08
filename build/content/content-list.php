<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
date_default_timezone_set("Europe/Warsaw");
// alternatively, use another PSR-0 compliant autoloader (like the Symfony2 ClassLoader for instance)

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('pl_PL');

$itemCount = empty($contentItemsCount) ? 15 : $contentItemsCount;
switch ($contentItems) {
  case 'polls':
  $itemType = 'list-item--poll';
  $contentListClass = '';
  $itemLabel = 'Opowiedz nam o...';
  $itemLink = 'q1.php';
  $headerIcon = 'rg-poll';
  $headerTitle = 'Ankiety dla Ciebie';
  break;

  case 'campaigns':
  $itemType = 'list-item--campaign';
  $contentListClass = '';
  $itemLabel = 'Kampania dla Ciebie';
  $itemLink = 'campaign.php';
  $headerIcon = 'rg-campaign';
  $headerTitle = 'Kampanie dla Ciebie';
  break;

  case 'promos':
  $itemType = 'list-item--promo';
  $contentListClass = '';
  $itemLabel = 'Promocja';
  $itemLink = '#dontmove';
  $headerIcon = 'rg-promotion';
  $headerTitle = 'Promocje dla Ciebie';
  break;

  case 'social':
  $itemType = 'social-feed__item';
  $contentListClass = 'campaign__social-feed';
  $itemLink = '#dontmove';
  $headerIcon = 'rg-influencer';
  $headerTitle = 'To mówią Ambasadorzy';
  break;

  default:
    # code...
  break;
}


$randItemCount = $faker->numberBetween($min = 1, $max = $itemCount);
?>

<section class="layout--base content-list__header">
  <div class="<?php echo $headerIcon ?> content-list__header-icon"></div>
  <h1 class="content-list__header-title"><?php echo $headerTitle ?></h1>
</section>

<section class="layout--base content-list <?php echo $contentListClass ?>" data-items="<?php echo $randItemCount ?>">

  <?php
  if ( $contentItems !== 'social' ) { // Other than social items

    // Open for loop
    for ( $i = 0; $i < $randItemCount; $i++) {
      $randChoice = $faker->numberBetween($min = 0, $max = $itemCount);
      ?>

      <a  href="<?php echo $itemLink ?>" class="list-item <?php echo $itemType ?>">
        <?php
        if ($randChoice % 2 === 0) {
          $imgURI = "https://unsplash.it/" . $faker->randomElement($array = array ('800', '600')) . "/" . $faker->randomElement($array = array ('800', '600')) . "?image=" . $faker->numberBetween($min = 0, $max = 1084);
          $imgURI_backup = "https://unsplash.it/" . $faker->randomElement($array = array ('800', '600')) . "/" . $faker->randomElement($array = array ('800', '600')) . "?image=" . $faker->numberBetween($min = 0, $max = 1084);
          ?>
          <img src="<?php echo $imgURI ?>" onerror="imgBroken(this)" data-src-backup="<?php echo $imgURI_backup ?>" alt="Image placeholder powered by Unsplash" class="image--cover">
          <?php
        }
        ?>
        <span class="list-item__type"><?php echo (empty($itemLabelArray[$i])) ? $itemLabel : $itemLabelArray[$i]  ?></span>
        <span class="list-item__name"><?php echo $faker->sentence ?></span>
      </a>

      <?php
    } // close for loop

  } else {// Social Items

    // Open for loop
    for ( $i = 0; $i < $randItemCount; $i++) {

      $socialChannel = $faker->randomElement($array = array ('item--facebook', 'item--instagram', 'item--twitter'));
      $socialTimeStamp = $faker->numberBetween($min = 1, $max = 28) . ' wrz 2016';
      $randChoice = $faker->numberBetween($min = 0, $max = $itemCount);

      if ($randChoice % 2 === 0) {

        // Plain social channel

        echo '<a  href="' . $itemLink . '" class="list-item ' . $itemType . ' ' . $socialChannel . '">';

        if ( $socialChannel !== 'item--twitter' || $socialChannel == 'item--instagram' ) {
          $imgURI = "https://unsplash.it/" . $faker->randomElement($array = array ('800', '600')) . "/" . $faker->randomElement($array = array ('800', '600')) . "?image=" . $faker->numberBetween($min = 0, $max = 1084);
          $imgURI_backup = "https://unsplash.it/" . $faker->randomElement($array = array ('800', '600')) . "/" . $faker->randomElement($array = array ('800', '600')) . "?image=" . $faker->numberBetween($min = 0, $max = 1084);
          ?>
          <img src="<?php echo $imgURI ?>" onerror="imgBroken(this)" data-src-backup="<?php echo $imgURI_backup ?>" alt="Image placeholder powered by Unsplash" class="image--cover">
          <?php
        }

        // Use hashtag and text if not facebook
        if ($socialChannel !== 'item--facebook') {
          echo '  <span class="social-feed__text">' . $faker->text($maxNbChars = 140) . ' <em>#' . $faker->word . '</em></span>';
          echo '  <span class="social-feed__details" data-timestamp="'. $socialTimeStamp . '">@' . $faker->firstName() . $faker->lastName() . '</span>';

        } else {
          echo '  <span class="social-feed__details" data-timestamp="'. $socialTimeStamp . '">' . $faker->firstName() . ' ' . $faker->lastName() . '</span>';
        }

        echo '  <span class="social-feed__icon"></span>';
        echo '</a>';

      } else {

        // Diary entry
        echo '<a href="' . $itemLink . '" class="list-item ' . $itemType . ' item--diary-entry">';
        echo '  <span class="social-feed__text">' . $faker->text($maxNbChars = 320) . '</span>';
        echo '  <span class="social-feed__details" data-timestamp="'. $socialTimeStamp . '">' . $faker->firstName() . ' ' . $faker->lastName() . '</span>';
        echo '  <span class="social-feed__icon"></span>';
        echo '</a>';
      }
    }
  }
  ?>

</section>
