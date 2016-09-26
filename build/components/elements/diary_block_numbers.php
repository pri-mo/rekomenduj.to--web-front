<?php
  $suffixSingle = "osoba";
  $suffixMaxfive = "osoby";
  $suffixFivemore = "osób";
?>

<div class='layout--card'>
    <h4><?php echo $title; ?></h4>
    <div class='grid__wrapper grid--simple-rwd'>
    <?php
      foreach ($questions as $question) {
        $labelOriginal = $questionsOriginals[array_search($question, $questions)];
        $labelFocused = $question;
        $labelInvalid= $question;
        $inputName = $question;
        ?>
        <div class="grid__item grid__span--6">
        <?php
        include("components/atoms/number-with-roller.php");
        ?>
        </div>
        <?php
      }
    ?>
    </div>
</div>
