<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
date_default_timezone_set("Europe/Warsaw");

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('pl_PL');

$itemCount = empty($contentItemsCount) ? 15 : $contentItemsCount;
$randChoice = $faker->numberBetween($min = 0, $max = $itemCount);

switch ($randChoice) {
  case 'polls':
    $itemType = 'list-item--poll';
    $itemLabel = 'Opowiedz nam o...';
    $itemLink = '#dontmove';
    $headerIcon = 'rg-poll';
    $headerTitle = 'Ankiety dla Ciebie';
    break;

  case 'campaigns':
    $itemType = 'list-item--campaign';
    $itemLabel = 'Kampania dla Ciebie';
    $itemLink = '#dontmove';
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

<section class="layout--base poll__info">
  <span class="help__flip">
    <div class="poll__icon" data-icon="t"></div>
    <div class="poll__name" data-label="Ankieta"><?php echo $faker->sentence ?></div>
  </span>
</section>

<section class="layout--base poll__question">
  <div class="question__name" data-label="Pytanie 5" data-extrainfo="Możesz zaznaczyć kilka odpowiedzi">
    <?php
      if ($randChoice % 2 === 0) {
        echo "<div class='question__img'><img onerror='imgBroken(this)' src='https://unsplash.it/{$faker->randomElement($array = array ('800', '600'))}/{$faker->randomElement($array = array ('800', '600'))}?image={$faker->numberBetween($min = 0, $max = 1084)}' alt=''></div>";
      }
    ?>
    <?php
      if ($randChoice % 3 === 0) {
        echo "<div class='question__vid'><iframe src='https://www.youtube.com/embed/Wk5qT_814xM' frameborder='0' allowfullscreen></iframe></div>";
      }
    ?>
    <p><?php echo $faker->sentence ?></p>
    <p><strong><?php echo $faker->sentence ?></strong></p>
  </div>
</section>


<section class="layout--base poll__answers">
  <form class="layout__group" id="check-answer">
    <label class="layout--card-1 ripple answer answer--pick"><input name="check-answer" value="1" type="checkbox"><span data-icon="y"></span><?php echo $faker->sentence ?></label>
    <label class="layout--card-1 ripple answer answer--pick"><input name="check-answer" value="2" type="checkbox"><span data-icon="y"></span><?php echo $faker->sentence ?></label>
    <label class="layout--card-1 ripple answer answer--pick"><input name="check-answer" value="3" type="checkbox"><span data-icon="y"></span><?php echo $faker->sentence ?></label>
    <label class="layout--card-1 ripple answer answer--pick"><input name="check-answer" value="4" type="checkbox"><span data-icon="y"></span><?php echo $faker->sentence ?></label>
    <label class="layout--card-1 ripple answer answer--pick answer--input" for="check-answer-5">
      <input id="check-answer-5" name="check-answer" value="5" type="checkbox"><span data-icon="y"></span>Inne
      <div class="input">
        <input tabindex name="check-answer" id="text" type="text" spellcheck="true" placeholder="Podaj swoją odpowiedź">
        <label for="text"
        data-focused="Twoja odpowiedź"
        data-original="Podaj swoją odpowiedź"
        data-invalid="Bez tego się nie obejdzie">Podaj swoją odpowiedź</label>
      </div>
    </label>
  </form>
</section>

<section class="layout--base poll__nav">
  <!-- TODO Fix the back button with proper destination on final build -->
  <a href="javascript:history.go(-1)" class="button button--icon"><span data-icon="F"></span></a>
  <button type="submit" form="question{$n}" formaction="question-{$n+1}.html" class="poll__nav--forward">Dalej <span data-icon="E"></span></button>
</section>
