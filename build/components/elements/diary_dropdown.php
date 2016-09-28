<div class='layout--card'>
  <h4><?php echo $title; ?></h4>
  <div class='grid__wrapper'>
      <?php foreach ($items as $val){
        include("components/elements/diary_dropdown_element.php");
      }
      ?>
  </div>
</div>
