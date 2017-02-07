<table class="table table-striped table-bordered table-hover">
	<thead>
		<tr>
			<th class="text-center" width="10">No.</th>
			<th class="text-center">Nama</th>
			<th class="text-center" width="150">Tahun Lulus</th>
			<th class="text-center" width="100">Kelas</th>
			<th class="text-center" width="200">Kecamatan</th>
			<th class="text-center" colspan="2">Action</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$no = 1;
		foreach ($konten as $k0 => $v0) {
			$id     = $v0['id_alumni'];
			$nama   = $v0['nama_alumni'];
			$lulus 	= $v0['tahun_lulus'];
			$kelas	= $v0['kelas'];
			$camat 	= $v0['kecamatan'];
	?>
		<tr>
			<th scope="row"><?php echo $no++; ?></th>
			<td><a href="#"><?php echo $nama; ?></a></td>
			<td class="text-center"><?php echo $lulus; ?></td>
			<td class="text-center"><?php echo $kelas; ?></td>
			<td class="text-center"><?php echo $camat; ?></td>
			<td  width="50"><?php echo anchor('#'.$id,"<span class='fa fa-edit' aria-hidden='true'> Edit</span>",array('title'=>'Edit data', 'class'=>'btn btn-info btn-xs')); ?></td>
			<td  width="40"><?php echo anchor('#'. $id,"<span class='fa fa-trash' aria-hidden='true'> Hapus</span>",array('title'=>'Hapus data', 'class'=>'btn btn-danger btn-xs', 'onclick'=>'return konfirmasi();')); ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
<script type="text/javascript" language="JavaScript" >
	function konfirmasi() {
		tanya = confirm("Anda yakin ingin menghapus data ini ?");
		if (tanya==true) return true;
        else return false;
    }
</script>