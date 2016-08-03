<?php

$selectPlaceholder = (isset($selectPlaceholder) && ($selectPlaceholder!=null)) ? $selectPlaceholder : "Wybierz opcję suwakiem";
?>
<div class="answer--slider">
  <select id="<?php echo "q{$q}-{$faker->numberBetween($min = 111, $max = 999)}" ?>" name="<?php echo "question_{$q}[]" ?>">
    <option value="" selected disabled><?php echo $selectPlaceholder ?></option>
    <option value="1">1 — zdecydowanie nie</option>
    <option value="2">2 — raczej nie</option>
    <option value="3">3 — trudno powiedzieć</option>
    <option value="4">4 — raczej tak</option>
    <option value="5">5 — zadecydowanie tak</option>
  </select>
  <div class="slider slider--snapping slider--select"></div>
</div>