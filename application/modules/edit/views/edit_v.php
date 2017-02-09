<style>
	#image-preview{
		display: none;
		width: 150px;
		height: 200px;
	}
</style>
<?php 
$atribut_form = array(
	'class' => 'form-horizontal form-label-left',
	'novalidate'=> '',
	'data-parsley-validate'=>''
	);
echo form_open('edit/update', $atribut_form);
echo form_hidden('proses', 'simpan');

foreach($update as $u) {
	$id_alumni 		= $u->id_alumni;
	$nama_alumni	= $u->nama_alumni;
	$tahun_lulus	= $u->tahun_lulus;
	$kelas 			= $u->kelas;
	$tempat_lahir	= $u->tempat_lahir;
	$tanggal_lahir	= $u->tanggal_lahir;
	$jenis_kelamin	= $u->jenis_kelamin;
	$email 			= $u->email;
	$alamat 		= $u->alamat;
	$kecamatan 		= $u->kecamatan;
	$kabupaten 		= $u->kabupaten;
	$nohp 			= $u->nohp;
	$kesan 			= $u->kesan;
	$pesan 			= $u->pesan;
	$foto 			= $u->foto;
?>


<div class="item form-group">
	<input type="hidden" class="form-control" name="id_alumni" value="<?php echo $id_alumni ?>">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Nama Lengkap <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$nama = array(
			'name' 			=> 'nama_alumni',
			'value'			=> $nama_alumni,
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Nama Alumni',
			'required'		=> 'required'
			);
		echo form_input($nama);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Tahun Lulusan <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$lulus = array(
			'name' 			=> 'tahun_lulus',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> '',
			'required'		=> 'required'
			);
		$options = array(
			''	=> '-- Pilih Tahun Lulusan --',
			'2009' => 'Lulusan Tahun 2009',
			'2010' => 'Lulusan Tahun 2010',
			'2011' => 'Lulusan Tahun 2011',
			'2012' => 'Lulusan Tahun 2012',
			'2013' => 'Lulusan Tahun 2013',
			'2014' => 'Lulusan Tahun 2014',
			'2015' => 'Lulusan Tahun 2015',
			'2016' => 'Lulusan Tahun 2016',
			);
		echo form_dropdown($lulus, $options, $tahun_lulus);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12" for="kelas">Kelas <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$kls = array(
			'name' 			=> 'kelas',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Kelas',
			'required'		=> 'required'
			);
		$options = array(
			''	=> '-- Pilih Kelas --',
			'A' => 'Kelas A',
			'B' => 'Kelas B',
			'C' => 'Kelas C',
			'D' => 'Kelas D',
			'E' => 'Kelas E',
			'F' => 'Kelas F',
			'G' => 'Kelas G',
			);
		echo form_dropdown($kls, $options, $kelas);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Tempat Lahir <span class="required">*</span></label>
	<div class="col-md-3 col-sm-2 col-xs-12">
	<?php 
		$temp_lahir = array(
			'name' 			=> 'tempat_lahir',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Tempat Lahir',
			'required'		=> 'required'
			);
		echo form_input($temp_lahir, $tempat_lahir);
	?>
	</div>
	<label class="control-label col-md-2 col-sm-2 col-xs-12">Tanggal Lahir <span class="required">*</span></label>
	<div class="col-md-2 col-sm-2 col-xs-12">
	<?php 
		$tgl_lahir = array(
			'name' 			=> 'tanggal_lahir',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-4 col-xs-12',
			'placeholder'	=> '(yyyy-mm-dd)',
			'data-inputmask'=> "'mask': '9999-99-99'",
			'required'		=> 'required'
			);
		echo form_input($tgl_lahir, $tanggal_lahir);
	?>
	</div>        
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Jenis Kelamin <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
		<label class="radio-inline">
		<?php 
			$lk = array(
				'name' 		=> 'jenis_kelamin',
				'value'		=> 'L',
				'checked'	=> 'checked',
				'required'	=> 'required'
				);
			echo form_radio($lk, $jenis_kelamin);
			echo " Laki-laki";
		?>
		</label>
	</div>
	<div class="col-md-7 col-sm-6 col-xs-12">
		<label class="radio-inline">
		<?php 
			$pr = array(
				'name' 		=> 'jenis_kelamin',
				'value'		=> 'P',
				'required'	=> 'required'
				);
			echo form_radio($pr, $jenis_kelamin);
			echo " Perempuan";
		?>
		</label>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$mail = array(
			'name' 			=> 'email',
			'type'			=> 'email',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Email Alumni',
			'required'		=> 'required'
			);
		echo form_input($mail, $email);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12" for="alamat">Alamat <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$addr = array(
			'name' 			=> 'alamat',
			'type'			=> 'textarea',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Alamat Alumni',
			'required'		=> 'required'
			);
		echo form_textarea($addr, $alamat);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Kecamatan <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$kec = array(
			'name' 			=> 'kecamatan',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Kecamatan Alumni',
			'required'		=> 'required'
			);
		echo form_input($kec, $kecamatan);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12">Kabupaten <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$kab = array(
			'name' 			=> 'kabupaten',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Kabupaten Alumni',
			'required'		=> 'required'
			);
		echo form_input($kab, $kabupaten);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12" for="nohp">No. HP <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$hp = array(
			'name' 			=> 'nohp',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Nomor HP Alumni',
			'required'		=> 'required'
			);
		echo form_input($hp, $nohp);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12" for="kesan">Kesan <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$kes = array(
			'name' 			=> 'kesan',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Kesan dari Alumni',
			'required'		=> 'required'
			);
		echo form_textarea($kes, $kesan);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12" for="pesan">Pesan <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
	<?php 
		$pes = array(
			'name' 			=> 'pesan',
			'type'			=> 'text',
			'class'			=> 'form-control col-md-7 col-xs-12',
			'placeholder'	=> 'Pesan dari Alumni',
			'required'		=> 'required'
			);
		echo form_textarea($pes, $pesan);
	?>
	</div>
</div>

<div class="item form-group">
	<label class="control-label col-md-2 col-sm-3 col-xs-12" for="foto">Upload Foto <span class="required">*</span></label>
	<div class="col-md-7 col-sm-6 col-xs-12">
		<img id="image-preview"/>
		<?php 
			$photo = array(
				'name' 		=> 'foto',
				'type'		=> 'file',
				'id'		=> 'image-source',
				'onchange'	=> 'previewImage();'
				);
			echo form_upload($photo, $foto);
		?>
	</div>
</div>

<br><br>
<div class="form-group">
	<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
		<button type="submit" class="btn btn-success" onclick="return konfirmasi();"><i class="fa fa-upload"></i> Update</button>
		<?php 
			$back = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
			echo anchor($back,'<i class="fa fa-share"></i> Kembali',array('class'=>'btn btn-danger'));
		?>
	</div>
</div>
<?php } ?>
<?php echo form_close(); ?>

<!-- Custom Konfirmasi -->
<script src="<?php echo base_url(); ?>assets/vendors/konfirmasi/js/konfirmasi.js"></script>