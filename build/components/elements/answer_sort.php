<div class="layout__group sort-bucket--source" id="sourceBucket">
  <?php

  for ($i=1; $i <= $answerCount; $i++) {
    echo "<label class='layout--card-1 ripple answer answer--sort' data-order='{$i}'><input hidden id='q{$q}-answer-{$i}' name='question_{$q}[]' value='{$i}'><span data-icon='K'></span>Odpowiedź {$i}</label>";
  }

  ?>
</div>
