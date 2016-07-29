<div class="layout__group sort-bucket--source" id="sourceBucket">
  <?php for ($i=1; $i <= $answerCount; $i++) { ?>
  <label class="layout--card-1 ripple answer answer--sort" data-order="<?php echo $i ?>">
  <input hidden id="<?php echo "q{$q}-answer-{$i}" ?>" name="<?php echo "question_{$q}[]" ?>" value="<?php echo $i ?>"><span data-icon="K"></span>Odpowiedź <?php echo $i ?>
  </label>
  <?php
  }
  ?>
</div>
