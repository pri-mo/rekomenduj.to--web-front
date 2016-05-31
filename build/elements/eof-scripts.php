<script src="/assets/js/app.min.js" charset="utf-8"></script>

<?php if( isset($masonry) && ($masonry!=null) ) { ?>
<script type="text/javascript">
$('.content-list').masonry({
  itemSelector: '.list-item',
  columnWidth: '.list-sizer',
  percentPosition: true,
});
</script>
<?php } ?>
