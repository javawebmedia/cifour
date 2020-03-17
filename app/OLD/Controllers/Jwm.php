<?php namespace App\Controllers;

use App\Models\Berita_model;
use App\Models\Kecamatan_model;

class Jwm extends BaseController
{
	// Halaman login
	public function index()
	{
		$model = new Berita_model();
		$berita = $model->listing();
		echo json_encode($berita);
	}

	// Halaman login
	public function read($slug_berita)
	{
		$model = new Berita_model();
		$berita = $model->read($slug_berita);
		echo json_encode($berita);
	}

	// Kecamatan
	public function kecamatan()
	{
		$model = new Kecamatan_model();
		$kecamatan = $model->listing();
		echo '<hr><p>Page rendered in {elapsed_time} seconds</p>';
		foreach($kecamatan as $kecamatan) {
			echo $kecamatan->id_kecamatan.' '.$kecamatan->nama_kecamatan.'<br>';
		}
	}

	// Kecamatan
	public function kecamatan2()
	{
		$model = new Kecamatan_model();
		$kecamatan = $model->listing_array();
		echo '<hr><p>Page rendered in {elapsed_time} seconds</p>';
		foreach($kecamatan as $kecamatan) {
			echo $kecamatan['id_kecamatan'].' '.$kecamatan['nama_kecamatan'].'<br>';
		}
	}

	// Tambah
	public function tambah()
	{
		$data = array(	'judul_berita'	=> 'Uji coba');
		$model = new Berita_model();
		$berita = $model->save($data);
		if($berita) {
			$res['message'] = 'Data telah ditambah';
		}else{
			$res['message'] = 'Data gagal ditambah';
		}
		echo json_encode($res);
	}

	// Tambah
	public function edit($id_berita)
	{
		$data 	= array(	'id_berita'		=> $this->request->getVar('id_berita'),
							'judul_berita'	=> $this->request->getVar('judul_berita'));
		$model 	= new Berita_model();
		$berita = $model->edit($data);
		$res['message'] = 'Data telah diupdate';
		echo json_encode($res);
	}

	// Tambah
	public function delete($id_berita)
	{
		$model 	= new Berita_model();
		$berita = $model->hapus($id_berita);
		$res['message'] = 'Data telah dihapus';
		echo json_encode($res);
	}
}
