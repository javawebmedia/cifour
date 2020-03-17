<?php  namespace App\Controllers\admin;

// Load model
use App\Models\Kategori_model;
// End load model

use CodeIgniter\Controller;

class Kategori extends Controller
{

	// Listing all
	public function index()
	{
		$session = \Config\Services::session($config);
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model = new Kategori_model();
		$kategori = $model->listing();
		$data = array(	
			'title'		=> 'Data Kategori',
			'kategori'		=> $kategori,
			'content'	=> 'admin/kategori/index');
		return view('admin/layout/wrapper',$data);
	}

	// Tambah
	public function tambah()
	{
		helper('form');
		$session = \Config\Services::session($config);
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		// Start validasi
		if (! $this->validate([
			'nama_kategori' 		=> 'required',
		]))
		{
		// End validasi
			$data = array(	'title'		=> 'Tambah Kategori',
							'content'	=> 'admin/kategori/tambah');
			return view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$data = array(	'nama_kategori'	=> $this->request->getVar('nama_kategori'),
							'slug_kategori'	=> url_title($this->request->getVar('nama_kategori')),
							'urutan'		=> $this->request->getVar('urutan')
						);
			$model = new Kategori_model();
			$model->save($data);
			$session->setFlashdata('sukses', 'Data telah ditambah');
			return redirect()->to(base_url('admin/kategori'));
		}
		// End masuk database
	}

	// Edit
	public function edit($id_kategori)
	{
		helper('form');
		$session	= \Config\Services::session($config);
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model 		= new Kategori_model();
		$kategori 		= $model->detail($id_kategori);
		// Start validasi
		if (! $this->validate([
			'nama_kategori' 		=> 'required',
		]))
		{
		// End validasi
			$data = array(	'title'		=> 'Edit Kategori',
							'kategori'	=> $kategori,
							'content'	=> 'admin/kategori/edit');
			return view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$data = array(	'id_kategori'	=> $this->request->getVar('id_kategori'),
							'nama_kategori'	=> $this->request->getVar('nama_kategori'),
							'slug_kategori'	=> url_title($this->request->getVar('nama_kategori')),
							'urutan'		=> $this->request->getVar('urutan')
						);
			$model->edit($data);
			$session->setFlashdata('sukses', 'Data telah diupdate');
			return redirect()->to(base_url('admin/kategori'));
		}
		// End masuk database
	}

	// Delete
	public function delete($id_kategori)
	{
		$session = \Config\Services::session($config);
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model 	= new Kategori_model();
		$kategori = $model->hapus($id_kategori);
		$session->setFlashdata('sukses', 'Data telah dihapus');
		return redirect()->to(base_url('admin/kategori'));
	}

}
