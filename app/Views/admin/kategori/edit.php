

<?php echo form_open(base_url('admin/kategori/edit/'.$kategori['id_kategori']),' class="form-horizontal"') ?>
<input type="hidden" name="id_kategori" value="<?php echo $kategori['id_kategori'] ?>">
<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Nama Kategori<span class="text-danger">*</span></label>
  <div class="col-sm-9">
        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Nama Kategori" value="<?php echo $kategori['nama_kategori'] ?>">
  </div>
</div>

<div class="form-group row">
  <label class="col-sm-3 control-label text-right">Urutan <span class="text-danger">*</span></label>
  <div class="col-sm-9">
    <input type="number" name="urutan" class="form-control" placeholder="Urutan" value="<?php echo $kategori['urutan'] ?>">
  </div>
</div>



<div class="form-group row">
  <label class="col-sm-3 control-label text-right"></label>
  <div class="col-sm-9">
    <div class="btn-group">
        <button type="submit" name="submit" class="btn btn-success btn-lg"><i class="fa fa-save"></i> Simpan Data</button>
        <button type="reset" name="reset" class="btn btn-info btn-lg"><i class="fa fa-cut"></i> Reset</button>
        <a href="<?php echo base_url('admin/kategori') ?>" class="btn btn-secondary btn-lg" data-dismiss="modal"><i class="fa fa-times"></i> Kembali</a>
    </div>
  </div>
</div>

<?php echo form_close(); ?>