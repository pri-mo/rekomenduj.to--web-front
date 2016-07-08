<?php

$sliderLabel = (isset($sliderLabel)) ? $sliderLabel : "Wartość: ";

$dataMin = (isset($dataMin) && ($dataMin!=null)) ? $dataMin : 0;
$dataMax = (isset($dataMax) && ($dataMax!=null)) ? $dataMax : 500;
$dataDefault = (isset($dataDefault) && ($dataDefault!=null)) ? $dataDefault : 100;
$dataStep = (isset($dataStep) && ($dataStep!=null)) ? $dataStep : 50;

if (isset($dataSuffix) && $dataSuffix!=null) {
  $dataAffix = "data-suffix='{$dataSuffix}'";
} else if (isset($dataPreffix) && $dataPreffix!=null) {
  $dataAffix = "data-preffix='{$dataPreffix}'";
} else {
  $dataAffix = "";
}

echo "<div class='layout--card-1 answer--slider'>";
echo   "<label class='slider__label' for='q{$q}'>{$sliderLabel}</label>";
echo   "<input id='q{$q}' name='question_{$q}[]' size='' class='slider__value' type='text' readonly>";
echo   "<div class='slider slider--snapping slider--range'";
echo        "data-s-min='{$dataMin}'";
echo        "data-s-max='{$dataMax}'";
echo        "data-s-default='{$dataDefault}'";
echo        "data-s-step='{$dataStep}'";
echo        "{$dataAffix}>";
echo   "</div>";
echo "</div>";

?>
