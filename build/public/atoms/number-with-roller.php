<?php

$inputName = (isset($inputName) && ($inputName!=null)) ? $inputName : "userKidsNumber" ;

$suffixSingle = (isset($suffixSingle) && ($suffixSingle!=null)) ? $suffixSingle : "dziecko" ;
$suffixMaxfive = (isset($suffixMaxfive) && ($suffixMaxfive!=null)) ? $suffixMaxfive : "dzieci" ;
$suffixFivemore = (isset($suffixFivemore) && ($suffixFivemore!=null)) ? $suffixFivemore : "dzieci" ;

$labelFocused = (isset($labelFocused) && ($labelFocused!=null)) ? $labelFocused : "" ;
$labelOriginal = (isset($labelOriginal) && ($labelOriginal!=null)) ? $labelOriginal : "Podaj liczbę dzieci" ;
$labelInvalid = (isset($labelInvalid) && ($labelInvalid!=null)) ? $labelInvalid : "Podaj poprawną odpowiedź" ;

?>
<div class="input input--number">
    <input tabindex name="<?php echo $inputName; ?>" id="<?php echo $inputName; ?>" type="number" step="1" min="0" max="" spellcheck="false">
    <label  for="<?php echo $inputName; ?>"
            data-focused="<?php echo $labelFocused; ?>"
            data-original="<?php echo $labelOriginal; ?>"
            data-invalid="<?php echo $labelInvalid; ?>"><?php echo $labelOriginal; ?></label>
    <span   class="number__suffix"
            data-suffix-single="<?php echo $suffixSingle; ?>"
            data-suffix-maxfive="<?php echo $suffixMaxfive; ?>"
            data-suffix-fivemore="<?php echo $suffixFivemore; ?>"></span>
    <span class="ripple number__more" data-icon="e"></span>
    <span class="ripple number__less" data-icon="f"></span>
</div>