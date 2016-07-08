<?php

$inputName = (isset($inputName) && ($inputName!=null)) ? $inputName : "q{$q}-answer" ;
$pickType = (isset($pickType) && ($pickType!=null)) ? $pickType : "checkbox" ;

if (isset($i) && ($i!=null)) {
  echo "<label class='ripple answer answer--pick no-card'><input name='q{$q}-answer-{$i}' id='check-answer-{$i}' type='{$pickType}'><span data-icon='y'></span></label>";
} else {
  echo "<label class='ripple answer answer--pick no-card'><input name='{$inputName}' id='{$inputName}' type='{$pickType}'><span data-icon='y'></span></label>";
}

?>
