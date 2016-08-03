<h4>Wybierz spośród tych odpowiedzi</h4>
<form>
<div class="layout__group drag-bucket--source" id="sourceBucket">
  <?php

  for ($i=1; $i <= $answerCount; $i++) { ?>
  <label class="layout--card ripple answer answer--drag" data-order="<?php echo $i ?>">
  <input hidden id="<?php echo "q{$q}-answer-{$i}"?>" name="<?php echo "question_{$q}[]" ?>" value="<?php echo $i ?>">
  <span data-icon="K"></span>Odpowiedź <?php echo $i ?></label>
  <?php
  }
  ?>
  <span class="placeholder">Wszystkie pozycje są w grupach</span>
</div>
