<?php

$selectPlaceholder = (isset($selectPlaceholder) && ($selectPlaceholder!=null)) ? $selectPlaceholder : "Wybierz opcję suwakiem";

switch ($matrixType) {
  case 'pick':
  $matrixAnswerType = "components/atoms/pick.php";
  break;

  case 'kids':
  $matrixAnswerType = "components/elements/answer_kids.php";
  break;

  case 'longform':
  $matrixAnswerType = "components/elements/answer_longform.php";
  break;

  case 'images':
  $matrixAnswerType = "components/elements/answer_images.php";
  break;

  case 'slider-value':
  $matrixAnswerType = "components/elements/answer_slider-value.php";
  break;

  case 'slider-range':
  $matrixAnswerType = "components/elements/answer_slider-range.php";
  break;

  case 'slider-select':
  $matrixAnswerType = "components/elements/answer_slider-select.php";
  break;

  default:
    # code...
  break;
}

?>

<div class="answer--matrix"> <!-- klasa no-head wyłącza thead -->
  <table class="sticky-headers">
    <thead>
      <!-- Obowiązkowy element -->
      <th><!-- Pozostawić pusty --></th>
      <th>mBank</th>
      <th>PKO BP</th>
      <th>BZ WBK</th>
    </thead>
    <tbody>
      <!-- Obowiązkowy element -->
      <tr>
        <th class="matrix__questions">Uważam, że&nbsp;jest to nowoczesny bank.</th>
        <td class="matrix__answers">
          <?php $i = 1; include $matrixAnswerType; ?>
        </td>
        <td class="matrix__answers">
          <?php $i = 2; include $matrixAnswerType; ?>
        </td>
        <td class="matrix__answers">
          <?php $i = 3; include $matrixAnswerType; ?>
        </td>
      </tr>
      <tr>
        <th class="matrix__questions">Uważam, że&nbsp;jest to mobilny bank.</th>
        <td class="matrix__answers">
          <?php $i = 1; include $matrixAnswerType; ?>
        </td>
        <td class="matrix__answers">
          <?php $i = 2; include $matrixAnswerType; ?>
        </td>
        <td class="matrix__answers">
          <?php $i = 3; include $matrixAnswerType; ?>
        </td>
      </tr>
      <tr>
        <th class="matrix__questions">Jest to bank, do którego mam zaufanie.</th>
        <td class="matrix__answers">
          <?php $i = 1; include $matrixAnswerType; ?>
        </td>
        <td class="matrix__answers">
          <?php $i = 2; include $matrixAnswerType; ?>
        </td>
        <td class="matrix__answers">
          <?php $i = 3; include $matrixAnswerType; ?>
        </td>
      </tr>
    </tbody>
  </table>
</div>
