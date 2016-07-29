<?php for ($i=1; $i <= $answerCount; $i++) {
  if ( $i != $answerCount ) { ?>
    <label class="layout--card-1 ripple answer answer--pick" data-order="<?php echo $i ?>"><input id="<?php echo "q{$q}-answer-{$i}_{$faker->numberBetween($min = 111, $max = 999)}"?>" name="<?php echo "question_{$q}[]"?>" value="<?php echo $i ?>" type="<?php echo $checkType ?>"><span data-icon="y"></span><?php echo $faker->sentence ?></label>
    <?php
  } else {
    // TODO Make this an option for the admin
    ?>
    <label class="layout--card-1 ripple answer answer--pick answer--input" for="<?php echo "q{$q}-answer-{$i}"?>">
      <input id="<?php echo "q{$q}-answer-{$i}_{$faker->numberBetween($min = 111, $max = 999)}"?>" name="<?php echo "question_{$q}[]"?>" value="<?php echo $i ?>" type="<?php echo $checkType ?>"><span data-icon="y"></span>Inne
      <?php include "components/atoms/singleline.php"; ?>
    </label>
    <?php
  }
} ?>
