<h4>Wybierz spośród tych odpowiedzi</h4>
<div class="layout__group drag-bucket--source" id="sourceBucket">
  <?php

  for ($i=1; $i <= $answerCount; $i++) {
    echo "<label class='layout--card-1 ripple answer answer--drag' data-order='{$i}'><input hidden id='q{$q}-answer-{$i}' name='question_{$q}[]' value='{$i}'><span data-icon='K'></span>Odpowiedź {$i}</label>";
  }

  ?>
  <span class="placeholder">Wszystkie pozycje są w grupach</span>
</div>
