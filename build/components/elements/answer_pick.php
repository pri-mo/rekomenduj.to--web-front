<?php for ($i=1; $i <= $answerCount; $i++) {
  if ( $i != $answerCount ) {
    echo "<label class='layout--card-1 ripple answer answer--pick' data-order='{$i}'><input id='q{$q}-answer-{$i}' name='question_{$q}[]' value='{$i}' type='{$checkType}'><span data-icon='y'></span>{$faker->sentence}</label>";
  } else {
    // TODO Make this an option for the admin
    echo "<label class='layout--card-1 ripple answer answer--pick answer--input' for='q{$q}-answer-{$i}'>
          <input id='q{$q}-answer-{$i}' name='question_{$q}[]' value='{$i}' type='{$checkType}'><span data-icon='y'></span>Inne";

    include 'components/atoms/singleline.php';

    echo "</label>";
  }
} ?>
