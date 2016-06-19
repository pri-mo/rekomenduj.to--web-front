<?php

$inputName = (isset($inputName) && ($inputName!=null)) ? $inputName : "q{$q}-answer" ;

$labelFocused = (isset($labelFocused) && ($labelFocused!=null)) ? $labelFocused : "Twoja odpowiedź" ;
$labelOriginal = (isset($labelOriginal) && ($labelOriginal!=null)) ? $labelOriginal : "Opowiedz o tym..." ;
$labelInvalid = (isset($labelInvalid) && ($labelInvalid!=null)) ? $labelInvalid : "Twoja odpowiedź jest ważna" ;

if (isset($i) && ($i!=null)) {
  echo "<div class='input'>
        <input tabindex name='q{$q}-answer-{$i}-uservalue' id='check-answer-{$i}-uservalue' type='text' spellcheck='true' placeholder='{$labelFocused}'>
        <label for='q{$q}-answer-{$i}-uservalue' data-focused='{$labelFocused}' data-original='{$labelOriginal}' data-invalid='{$labelInvalid}'>{$labelFocused}</label>
        </div>";
} else {
  echo "<div class='input'>
        <input tabindex name='$inputName' id='$inputName' type='text' spellcheck='true' placeholder='{$labelFocused}'>
        <label for='$inputName' data-focused='{$labelFocused}' data-original='{$labelOriginal}' data-invalid='{$labelInvalid}'>{$labelFocused}</label>
        </div>";
}

?>
