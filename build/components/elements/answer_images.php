<?php

for ($i=1; $i <= $answerCount; $i++) {
  $fakeImage = $faker->numberBetween($min = 1040, $max = 1084);
  echo "<label class='layout--card-1 ripple answer answer--pick answer--image' data-order='{$i}' data-fullsize='https://unsplash.it/800/?image={$fakeImage}'>
          <input id='q{$q}-answer-{$i}' name='question_{$q}[]' value='{$i}' type='{$checkType}'><span data-icon='y'></span>
          <img src='https://unsplash.it/300/?image={$fakeImage}' alt=''>
        </label>";

}

?>
