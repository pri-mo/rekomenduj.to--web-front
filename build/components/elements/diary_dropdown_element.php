<?php
  $c = (count($items) % 3 == 0) ? 'grid__xs-span--4' : ((count($items) % 2 == 0) ? 'grid__xs-span--6' : 'grid__span--12');
?>
<div class="input input--select grid__item <?php echo $c; ?>">
  <select name="<?php echo $val[0];?>" id="<?php echo $val[0];?>"  required>
    <?php
      for ($i=0; $i <= $val[1]; $i++){
        echo "<option value='$i'>$i</option>";
      }
     ?>
  </select>
  <label for="diary-category"
  data-focused=<?php echo $val[0];?>

  data-invalid="To pole jest obowiązkowe"><?php echo $val[0];?></label>
</div>
