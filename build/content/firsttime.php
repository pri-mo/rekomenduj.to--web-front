<section class="layout--base layout--fullscreen paint--gradient<?php // paint--back- echo $step + 2 ?>">

<?php switch ($step) {

  case 0:?>
    <div class="stepper stepper--intro">
      <div class="stepper__step-container">
        <div class="stepper__content">
          <h2 class="light headline">Rekomenduj.to <br>daje Ci możliwość przetestowania produktów, dostępu do wyjątkowych promocji i zniżek.</h2>
          <p>
            Dlatego ważne jest, abyśmy poznali podstawowe informacje o Tobie jak wiek, miejsce zamieszkania, wykształcenie.
          </p>
          <p>
            <strong>Dokończenie rejestracji zajmie Ci nie więcej niż kilka minut.</strong>
          </p>
        </div>
      </div>
    </div>
    <?php break;

  case $stepMax+1:?>
    <div class="stepper stepper--intro">
      <div class="stepper__step-container">
        <div class="stepper__content">
          <h2 class="light headline">Prawie gotowe</h2>
          <p>
            Aby w pełni stać się użytkownikiem Rekomenduj.to wgraj swoje zdjęcie profilowe i dodaj swoje społeczności (tj. Facebook, Instagram etc.).
          </p>
          <p>
            Ostatnim — i pierwszy za razem — krokiem będzie wypełnienie pierwszej ankiety.
          </p>
        </div>
      </div>
    </div>
    <?php break;

  default:?>
    <div class="stepper">
      <ul class="stepper__nav">
        <?php for ($s=0; $s <= $stepMax; $s++) { ?>
          <li><a href="<?php echo $s==0 ? 'step-intro' : 'step-'.$s; ?>.php" class="stepper__nav-item <?php echo $s==$step ? 'current' : ''; ?>"></a></li>
        <?php } ?>
      </ul>
      <div class="stepper__step-container">
        <div class="stepper__header"><?php echo (isset($stepperHeader)) ? $stepperHeader : '' ?></div>
        <div class="stepper__content"><?php echo (isset($stepperContent)) ? $stepperContent : '' ?></div>
      </div>
    </div>
    <?php break;
} ?>

<?php if ($step == 0) { ?>

  <div class="layout__button-bar space--m flow--center">
    <a href="step-<?php echo ++$step; ?>.php" class="button" name="button">Dalej</a>
  </div>
  <div class="layout__button-bar space--s flow--center">
    <a href="step-final.php" class="link--spare">Może innym razem...</a>
  </div>

<?php } elseif ($step <= $stepMax) { ?>

  <div class="layout__button-bar space--l flow--center">
    <a href="<?php echo $step==$stepMax ? 'step-final' : 'step-'.++$step ?>.php" class="button" name="button">Dalej</a>
  </div>

<?php } else { ?>

  <div class="layout__button-bar space--l flow--center">
    <a href="profile-welcome.php" class="button" name="button">Do dzieła więc</a>
  </div>

<?php } ?>

</section>
