<?php

$sliderLabel = (isset($sliderLabel)) ? $sliderLabel : "Wartość: ";
$sliderRangeSwitch = (isset($sliderRange)) ? "slider--value-range" : "";

$dataMin = (isset($dataMin) && ($dataMin!=null)) ? $dataMin : 0;
$dataMax = (isset($dataMax) && ($dataMax!=null)) ? $dataMax : 500;
$dataDefault = (isset($dataDefault) && ($dataDefault!=null)) ? $dataDefault : 100;
$dataStep = (isset($dataStep) && ($dataStep!=null)) ? $dataStep : 50;

if (isset($dataSuffix) && $dataSuffix!=null) {
  $dataAffix = 'data-suffix="' . $dataSuffix . '"';
} else if (isset($dataPreffix) && $dataPreffix!=null) {
  $dataAffix = 'data-preffix="' . $dataPreffix . '"';
} else {
  $dataAffix = "";
}
?>
<div class="answer--slider">
  <label class="slider__label" for="<?php echo "q{$q}"?>"><?php echo $sliderLabel ?></label>
  <input id="<?php echo "q{$q}"?>" name="<?php echo "question_{$q}[]"?>" size="" class="slider__value" type="text" readonly>
  <div class="slider slider--snapping slider--value" data-s-min="<?php echo $dataMin ?>" data-s-max="<?php echo $dataMax ?>" data-s-default="<?php echo $dataDefault ?>" data-s-step="<?php echo $dataStep ?>" <?php echo $dataAffix ?>>
  </div>
</div>
