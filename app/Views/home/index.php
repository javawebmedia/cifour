<div class="row">
<div class="col-12">
	<hr>
	<h1>Simple CMS dengan Codeigniter 4 - Java Web Media</h1>	
	<hr>
</div>
<?php $no=1; foreach($berita as $berita) { ?>
	<div class="col-md-4 berita">
		<p class="text-center">
			<img src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>" class="img img-thumbnail img-fluid">
		</p>

		<h2><a href="<?php echo base_url('home/read/'.$berita['slug_berita']) ?>"><?php echo $berita['judul_berita'] ?></a></h2>
		<p><?php echo strip_tags(character_limiter($berita['isi']),50) ?></p>

		<p class="text-right"><a href="<?php echo base_url('home/read/'.$berita['slug_berita']) ?>">Baca detail...</a></p>
	</div>
	<?php $no++; } ?>
</div>
