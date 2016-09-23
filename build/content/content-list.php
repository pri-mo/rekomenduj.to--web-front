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
    $itemLabel = 'Opowiedz nam o...';
    $itemLink = 'q1.php';
    $headerIcon = 'rg-poll';
    $headerTitle = 'Ankiety dla Ciebie';
    break;

  case 'campaigns':
    $itemType = 'list-item--campaign';
    $itemLabel = 'Kampania dla Ciebie';
    $itemLink = 'campaign.php';
    $headerIcon = 'rg-campaign';
    $headerTitle = 'Kampanie dla Ciebie';
    break;

  case 'promos':
    $itemType = 'list-item--promo';
    $itemLabel = 'Promocja';
    $itemLink = '#dontmove';
    $headerIcon = 'rg-promotion';
    $headerTitle = 'Promocje dla Ciebie';
    break;

  default:
    # code...
    break;
}
?>

<section class="layout--base content-list__header">
  <div class="<?php echo $headerIcon ?> content-list__header-icon"></div>
  <h1 class="content-list__header-title"><?php echo $headerTitle ?></h1>
</section>

<section class="layout--base content-list">

<?php
for ($i=0; $i < $itemCount; $i++) {
  $randChoice = $faker->numberBetween($min = 0, $max = $itemCount);
?>
<a  href="<?php echo $itemLink ?>"
    class="list-item <?php echo $itemType ?>"
    data-label="<?php echo (empty($itemLabelArray[$i])) ? $itemLabel : $itemLabelArray[$i]  ?>"
    data-index="<?php echo $i + 1 ?>">
  <?php
    if ($randChoice % 2 === 0) { ?>
      <!-- <img onerror="imgBroken(this)" src="https://unsplash.it/<?php echo $faker->randomElement($array = array ('800', '600'))?>/<?php echo $faker->randomElement($array = array ('800', '600'))?>?image=<?php echo $faker->numberBetween($min = 0, $max = 1084)?>" alt="" class="image--cover"> -->
      <img onerror="imgBroken(this)" src="assets/images/ph-safe.png" alt="" class="image--cover">
    <?php
    }
  ?>
  <span class="list-item__name"><?php echo $faker->sentence ?></span>
</a>
<?php } ?>

</section>
