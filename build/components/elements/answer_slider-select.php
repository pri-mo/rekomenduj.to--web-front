<?php

$selectPlaceholder = (isset($selectPlaceholder) && ($selectPlaceholder!=null)) ? $selectPlaceholder : "Wybierz opcję suwakiem";

echo "<div class='layout--card-1 answer--slider'>";
echo "  <select id='q{$q}' name='question_{$q}[]'>";
echo "    <option value='' selected disabled>{$selectPlaceholder}</option>";
echo "    <option value='1'>1 — zdecydowanie nie</option>";
echo "    <option value='2'>2 — raczej nie</option>";
echo "    <option value='3'>3 — trudno powiedzieć</option>";
echo "    <option value='4'>4 — raczej tak</option>";
echo "    <option value='5'>5 — zadecydowanie tak</option>";
echo "  </select>";
echo "  <div class='slider slider--snapping slider--select'></div>";
echo "</div>";

?>
