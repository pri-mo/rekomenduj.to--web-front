<?php

for ($i=1; $i <= $answerCount; $i++) {
  $fakeImage = $faker->numberBetween($min = 1040, $max = 1084); ?>
  <label class="layout--card ripple answer answer--pick answer--image" data-order="<?php echo $i ?>" data-fullsize="https://unsplash.it/800/?image=<?php echo $fakeImage ?>">
    <input id="<?php echo "q{$q}-answer-{$i}"?>" name="<?php echo "question_{$q}[]" ?>" value="<?php echo $i ?>" type="<?php echo $checkType ?>"><span data-icon="y"></span>
    <img src="https://unsplash.it/300/?image=<?php echo $fakeImage ?>" alt="">
  </label>
  <?php
}
?>
