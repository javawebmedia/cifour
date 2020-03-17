<?php if (session('msg')) : ?>
     <div class="alert alert-info alert-dismissible">
         <?= session('msg') ?>
         <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
     </div>
 <?php endif ?>

<form action="<?php echo base_url('admin/berita/tambah') ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Judul berita<span class="text-danger">*</span></label>
  <div class="col-sm-9">
        <input type="text" name="judul_berita" id="judul_berita" class="form-control" placeholder="Judul Berita" value="<?php echo set_value('judul_berita') ?>">
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Kategori <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <select name="id_kategori" class="form-control">
      <?php foreach ($kategori as $key => $kategori) { ?>
      <option value="<?php echo $kategori['id_kategori'] ?>">
        <?php echo $kategori['nama_kategori'] ?>
      </option>
      <?php } ?>
    </select>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Jenis Berita</label>
  <div class="col-sm-9">
    <select name="jenis_berita" class="form-control">
      <option value="Berita">Berita</option>
      <option value="Profil">Profil</option>
    </select>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Status Berita</label>
  <div class="col-sm-9">
    <select name="status_berita" class="form-control">
      <option value="Publish">Publish</option>
      <option value="Draft">Draft</option>
    </select>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Isi berita <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <textarea name="isi" class="form-control editor" placeholder="Isi berita"><?php echo set_value('isi'); ?></textarea>
  </div>
</div>         
      
     
<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Keyword untuk Google <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <textarea name="keywords" class="form-control" placeholder="Keyword untuk Google"><?php echo set_value('keywords'); ?></textarea>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Upload Gambar <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <input type="file" name="gambar" class="form-control" required>
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right"></label>
  <div class="col-sm-9">
    <div class="btn-group">
        <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
        <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
        <a href="<?php echo base_url('admin/berita') ?>" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
    </div>
  </div>
</div>

<?php echo form_close(); ?>