<link href="<?php echo base_url();?>assets/datepicker/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/datepicker/css/datepicker.css" rel="stylesheet">
<script src="<?php echo base_url();?>assets/datepicker/js/jquery-1.4.1.js"></script>
<script src="<?php echo base_url();?>assets/datepicker/js/bootstrap-datepicker.js"></script>
<script>
$(function(){
$('.datepicker').datepicker();
});
</script>
<div class="well">
  Tanggal : <input class="datepicker" type="text" name="date">
</div>
