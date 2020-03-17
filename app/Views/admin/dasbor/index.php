<p>
	<a class="btn btn-success btn-lg" href="<?php echo base_url('admin/berita/tambah') ?>">
		Tambah Berita
	</a>
</p>

<?php $session = \Config\Services::session($config);
if($session->getFlashdata('sukses')) { ?>
<p class="alert alert-success"><?php echo $session->getFlashdata('sukses'); ?></p>
<?php } ?>

<table class="table table-bordered table-hover">
	<thead>
		<tr class="bg-info">
			<th class="text-center" width="5%">NO</th>
			<th width="10%">Gambar</th>
			<th width="20%">Judul</th>
			<th width="10%">Kategori</th>
			<th width="10%">Jenis</th>
			<th width="5%">Status</th>
			<th width="10%"></th>
		</tr>
	</thead>
	<tbody>
		<?php $no=1; foreach($berita as $berita) { ?>
		<tr>
			<td class="text-center"><?php echo $no ?></td>
			<td class="text-center"><img src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>" class="img img-thumbnail" width="80"></td>
			<td><?php echo $berita['judul_berita'] ?></td>
			<td><?php echo $berita['nama_kategori'] ?></td>
			<td><?php echo $berita['jenis_berita'] ?></td>
			<td><?php echo $berita['status_berita'] ?></td>
			<td>
				<a class="btn btn-warning btn-sm" href="<?php echo base_url('admin/berita/edit/'.$berita['id_berita']) ?>">
					Edit
				</a>
				<a class="btn btn-danger btn-sm" href="<?php echo base_url('admin/berita/delete/'.$berita['id_berita']) ?>" onclick="return confirm('Yakin ingin menghapus berita ini?')">
					Hapus
				</a>
			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>