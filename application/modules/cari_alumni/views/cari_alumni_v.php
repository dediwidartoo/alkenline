<?php 
$atribut_form = array(
	'class' => 'form-horizontal form-label-left',
	'enctype' => 'multipart/form-data',
	'novalidate'=> '',
	'data-parsley-validate'=>''
	);
echo form_open_multipart('input_alumni/kirim_data', $atribut_form);
?>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Tahun Lulusan <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$lulus = array(
			'name' 			=> 'tahun_lulus',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Tahun Lulusan',
			'required'		=> 'required'
			);
		echo form_input($lulus);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Kelas <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$kel = array(
			'name' 			=> 'kelas',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Kelas',
			'required'		=> 'required'
			);
		echo form_input($kel);
	?>
	</div>
</div>

<br>
<div class="form-group">
	<div class="col-md-7 col-sm-6 col-xs-12 col-md-offset-2">
		<button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Cari</button>
		<?php 
			$back = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
			echo anchor($back,'<i class="fa fa-share"></i> Kembali',array('class'=>'btn btn-danger'));
		?>
	</div>
</div>
<?php
	echo form_close();
?>