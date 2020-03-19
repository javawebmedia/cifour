<?php  namespace App\Controllers\admin;

// Load model
use App\Models\Berita_model;
use App\Models\Kategori_model;
// End load model

use CodeIgniter\Controller;

class Berita extends Controller
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
		$model = new Berita_model();
		$berita = $model->listing();
		$data = array(	'title'		=> 'Data Berita',
						'berita'	=> $berita,
						'content'	=> 'admin/berita/index');
		return view('admin/layout/wrapper',$data);
	}

	// Tambah
	public function tambah()
	{
		helper(['form', 'url']);
		$image = \Config\Services::image();
		$session = \Config\Services::session($config);
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$mk 		= new Kategori_model();
		$kategori 	= $mk->listing();

		// Start validasi
		$validated =  $this->validate([
			'judul_berita' 	=> 'required',
			'isi' 			=> 'required',
			'gambar'	 	=> [
                'uploaded[gambar]',
                'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[gambar,4096]',
            ],
		]);
		
		if ($validated) {
			// Image upload
			$avatar  	= $this->request->getFile('gambar');
			$namabaru 	= $avatar->getRandomName();
            $avatar->move(WRITEPATH . '../assets/upload/image/',$namabaru);
        	// Masuk database
			$data = array(	'id_user'		=> 1,
							'id_kategori'	=> $this->request->getVar('id_kategori'),
							'slug_berita'	=> strtolower(url_title($this->request->getVar('judul_berita'))),
							'judul_berita'	=> $this->request->getVar('judul_berita'),
							'isi'			=> $this->request->getVar('isi'),
							'status_berita'	=> $this->request->getVar('status_berita'),
							'jenis_berita'	=> $this->request->getVar('jenis_berita'),
							'keywords'		=> $this->request->getVar('keywords'),
							'gambar'		=> $namabaru,
							'tanggal_post'	=> date('Y-m-d H:i:s')
						);
			$model = new Berita_model();
			$model->tambah($data);
			$session->setFlashdata('sukses', 'Data telah ditambah');
			return redirect()->to(base_url('admin/berita'));
			// End masuk database
        }
		$data = array(	'title'		=> 'Tambah Berita',
						'kategori'	=> $kategori,
						'content'	=> 'admin/berita/tambah');
		return view('admin/layout/wrapper',$data);
		
	}

	// Tambah
	public function edit($id_berita)
	{
		helper('form');
		$session = \Config\Services::session($config);
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$mk 		= new Kategori_model();
		$mb 		= new Berita_model();
		$kategori 	= $mk->listing();
		$berita 	= $mb->detail($id_berita);

		// Start validasi
		$validated =  $this->validate([
			'judul_berita' 	=> 'required',
			'isi' 			=> 'required',
			'gambar'	 	=> [
                'uploaded[gambar]',
                'mime_in[gambar,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[gambar,4096]',
            ],
		]);
		
		if ($validated) {
			// Image upload
			$avatar  	= $this->request->getFile('gambar');
			$namabaru 	= $avatar->getRandomName();
            $avatar->move(WRITEPATH . '../assets/upload/image/',$namabaru);
        	// Masuk database
			$data = array(	'id_berita'		=> $this->request->getVar('id_berita'),
							'id_user'		=> 1,
							'id_kategori'	=> $this->request->getVar('id_kategori'),
							'slug_berita'	=> strtolower(url_title($this->request->getVar('judul_berita'))),
							'judul_berita'	=> $this->request->getVar('judul_berita'),
							'isi'			=> $this->request->getVar('isi'),
							'status_berita'	=> $this->request->getVar('status_berita'),
							'jenis_berita'	=> $this->request->getVar('jenis_berita'),
							'keywords'		=> $this->request->getVar('keywords'),
							'gambar'		=> $namabaru,
						);
			$model = new Berita_model();
			$model->edit($data);
			$session->setFlashdata('sukses', 'Data telah diedit');
			return redirect()->to(base_url('admin/berita'));
			// End masuk database
        }
		$data = array(	'title'		=> 'Edit Berita',
						'kategori'	=> $kategori,
						'berita'	=> $berita,
						'content'	=> 'admin/berita/edit');
		return view('admin/layout/wrapper',$data);
	}

	// Delete
	public function delete($id_berita)
	{
		$session = \Config\Services::session($config);
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$model 	= new Berita_model();
		$berita = $model->hapus($id_berita);
		$session->setFlashdata('sukses', 'Data telah dihapus');
		return redirect()->to(base_url('admin/berita'));
	}

}
