<?php

$inputName = (isset($inputName) && ($inputName!=null)) ? $inputName : "q{$q}-answer" ;
$pickType = (isset($pickType) && ($pickType!=null)) ? $pickType : "checkbox" ;

if (isset($i) && ($i!=null)) { ?>
  <label class="ripple answer answer--pick no-card">
  <input name="<?php echo "q{$q}-answer-{$i}" ?>" id="<?php echo "check-answer-{$i}_{$faker->numberBetween($min = 111, $max = 999)}" ?>" type="<?php echo $pickType ?>">
  <span data-icon="y"></span>
  </label>
<?php } else { ?>
  <label class="ripple answer answer--pick no-card">
  <input name="<?php echo $inputName ?>" id="<?php echo "{$inputName}" ?>" type="<?php echo $pickType ?>">
  <span data-icon="y"></span>
  </label>
<?php
}
?>
