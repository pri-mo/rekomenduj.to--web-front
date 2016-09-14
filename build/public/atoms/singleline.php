<?php

$inputName = (isset($inputName) && ($inputName!=null)) ? $inputName : "q{$q}-answer" ;

$labelFocused = (isset($labelFocused) && ($labelFocused!=null)) ? $labelFocused : "Twoja odpowiedź" ;
$labelOriginal = (isset($labelOriginal) && ($labelOriginal!=null)) ? $labelOriginal : "Opowiedz o tym..." ;
$labelInvalid = (isset($labelInvalid) && ($labelInvalid!=null)) ? $labelInvalid : "Twoja odpowiedź jest ważna" ;

if (isset($i) && ($i!=null)) {
?>
<div class="input">
  <input tabindex name="<?php echo "q{$q}-answer-{$i}-uservalue" ?>" id="<?php "check-answer-{$i}-uservalue" ?>" type="text" spellcheck="true" placeholder="<?php echo $labelFocused ?>">
  <label for="<?php echo "q{$q}-answer-{$i}-uservalue" ?>" data-focused="<?php echo $labelFocused ?>" data-original="<?php echo $labelOriginal ?>" data-invalid="<?php echo $labelInvalid ?>"><?php echo $labelFocused ?></label>
</div>
<?php } else { ?>
  <div class="input">
    <input tabindex name="<?php echo $inputName ?>" id="<?php echo $inputName ?>" type="text" spellcheck="true" placeholder="<?php echo $labelFocused ?>">
    <label for="<?php echo $inputName ?>" data-focused="<?php echo $labelFocused ?>" data-original="<?php echo $labelOriginal ?>" data-invalid="<?php echo $labelInvalid ?>"><?php echo $labelFocused ?></label>
  </div>
  <?php
}
?>
