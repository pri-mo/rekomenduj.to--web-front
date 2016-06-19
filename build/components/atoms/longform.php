<?php

$inputName = (isset($inputName) && ($inputName!=null)) ? $inputName : "q{$q}-answer" ;

$labelFocused = (isset($labelFocused) && ($labelFocused!=null)) ? $labelFocused : "Twoja odpowiedź" ;
$labelOriginal = (isset($labelOriginal) && ($labelOriginal!=null)) ? $labelOriginal : "Opowiedz o tym..." ;
$labelInvalid = (isset($labelInvalid) && ($labelInvalid!=null)) ? $labelInvalid : "Twoja odpowiedź jest ważna" ;

?>

<div class="input input--show-label">
  <textarea tabindex name="<?php echo $inputName; ?>" id="<?php echo $inputName; ?>" required spellcheck="true" placeholder="<?php echo $labelOriginal; ?>"></textarea>
  <label for="<?php echo $inputName; ?>"
  data-focused="<?php echo $labelFocused; ?>"
  data-original="<?php echo $labelOriginal; ?>"
  data-invalid="<?php echo $labelInvalid; ?>"><?php echo $labelOriginal; ?></label>
</div>
