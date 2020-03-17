<div class="row">
<div class="col-md-4 berita">
		<img src="<?php echo base_url('assets/upload/image/'.$berita['gambar']) ?>" class="img img-thumbnail img-fluid">
</div>
<div class="col-md-8 berita">

	<h2><a href="<?php echo base_url('home/read/'.$berita['slug_berita']) ?>"><?php echo $berita['judul_berita'] ?></a></h2>
	<p><?php echo $berita['isi'] ?></p>
</div>
</div>
