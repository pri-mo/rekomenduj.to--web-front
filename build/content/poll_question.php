<?php
// require the Faker autoloader
require_once 'vendor/autoload.php';
date_default_timezone_set("Europe/Warsaw");

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create('pl_PL');

$q = (isset($q) && ($q!=null)) ? $q : 1 ; // prevent pointless errors

$itemCount = empty($contentItemsCount) ? 15 : $contentItemsCount;
$randChoice = $faker->numberBetween($min = 1, $max = 64);
$answerCount = $faker->numberBetween($min = 3, $max = 8);

$multiple = (isset($multiple) && ($multiple!=null)) ? $multiple : 'false' ; // prevent pointless errors

// Get question content or set dummy text
$questionIntro = (isset($questionIntro) && ($questionIntro!=null) ? $questionIntro : $faker->sentence );
$questionCall = (isset($questionCall) && ($questionCall!=null) ? $questionCall : $faker->sentence );


switch ($multiple) {
  case 'true':
  $checkType = "checkbox";
  $extraInfo = (isset($extraInfo) && ($extraInfo!=null)) ? $extraInfo : "Możesz zaznaczyć kilka odpowiedzi";
  break;

  case ($multiple > 1):
  $checkType = "checkbox";
  $extraInfo = "Możesz zaznaczyć tylko {$multiple} odpowiedzi";
  $maximumPick = $multiple;
  break;

  default:
  $checkType = "radio";
  $extraInfo = (isset($extraInfo) && ($extraInfo!=null)) ? $extraInfo : "Zaznacz jedną odpowiedź";
  break;
}

?>

<section class="layout--base poll__info">
  <span class="help__flip">
    <div class="poll__icon" data-icon="t"></div>
    <div class="poll__name" data-label="Ankieta"><?php echo $faker->sentence; ?></div>
  </span>
</section>

<section class="layout--base poll__question">
  <div class="question__name" data-label="Pytanie <?php echo $q; ?>" data-extrainfo="<?php echo $extraInfo; ?>">
    <?php
    if ($randChoice % 3 === 0) {
      echo "<div class='question__img'><img onerror='imgBroken(this)' src='https://unsplash.it/{$faker->randomElement($array = array ('800', '600'))}/{$faker->randomElement($array = array ('800', '600'))}?image={$faker->numberBetween($min = 0, $max = 1084)}' alt=''></div>";
    }
    ?>
    <?php
    if ($randChoice % 7 === 0) {
      echo "<div class='question__vid'><iframe src='https://www.youtube.com/embed/Wk5qT_814xM' frameborder='0' allowfullscreen></iframe></div>";
    }
    ?>
    <p><?php echo $questionIntro ?></p>
    <p><strong><?php echo $questionCall ?></strong></p>
  </div>
</section>

<?php if ($answerType == 'drag') { include 'components/elements/drag_buckets.php'; } ?>

<section class="layout--base poll__answers <?php echo (isset($imageGrid) ? "poll__answers--grid" : ''); ?>" <?php echo (isset($maximumPick) && ($maximumPick!=null) ? "data-max-pick='{$maximumPick}'" : '' ); ?>>
  <?php if ($answerType != 'drag') { ?>
  <form name="question<?php echo $q; ?>" id="question<?php echo $q; ?>" class="layout__group" data-answercount="<?php echo $answerCount; ?>">
  <?php } ?>

    <?php
    // Answer types
    switch ($answerType) {
      case 'pick':
      include "components/elements/answer_pick.php";
      break;

      case 'kids':
      include "components/elements/answer_kids.php";
      break;

      case 'longform':
      include "components/elements/answer_longform.php";
      break;

      case 'images':
      include "components/elements/answer_images.php";
      break;

      case 'drag':
      include "components/elements/answer_drag.php";
      break;

      case 'sort':
      include "components/elements/answer_sort.php";
      break;

      default:
        # code...
      break;
    }
    ?>

  </form>
</section>


<section class="layout--base poll__nav">
  <!-- TODO Fix the back button with proper destination on final build -->
  <a href="javascript:history.go(-1)" class="button button--icon"><span data-icon="F"></span></a>
  <!-- <button type="submit" form="question<?php echo $randChoice; ?>" formaction="" class="poll__nav--forward">Dalej <span data-icon="E"></span></button> -->
  <a href="/poll.php?p=1&q=<?php echo ++$q; ?>" class="poll__nav--forward">Dalej <span data-icon="E"></span></a>
</section>
