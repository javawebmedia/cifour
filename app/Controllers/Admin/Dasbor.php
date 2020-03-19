<?php  namespace App\Controllers\admin;

// Load model
use App\Models\Berita_model;
use App\Models\User_model;
// End load model

use CodeIgniter\Controller;

class Dasbor extends Controller
{
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
		$data = array(	'title'		=> 'Halaman Dashboard',
						'berita'	=> $berita,
						'content'	=> 'admin/dasbor/index');
		return view('admin/layout/wrapper',$data);
	}

	// Akun
	public function akun()
	{
		helper('form');
		$session	= \Config\Services::session($config);
		// Proteksi
		if($session->get('username') =="") {
			$session->setFlashdata('sukses', 'Anda belum login');
			return redirect()->to(base_url('login'));
		}
		// End proteksi
		$id_user 	= $session->get('id_user');
		$model 		= new User_model();
		$user 		= $model->detail($id_user);
		// Start validasi
		if (! $this->validate([
			'nama' 		=> 'required',
			'email'  	=> 'required',
			'username'  => 'required',
			'password'  => 'required',
		]))
		{
		// End validasi
			$data = array(	'title'		=> 'Update Profile',
							'user'		=> $user,
							'content'	=> 'admin/dasbor/akun');
			return view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
			$data = array(	'id_user'		=> $this->request->getVar('id_user'),
							'nama'			=> $this->request->getVar('nama'),
							'email'			=> $this->request->getVar('email'),
							'username'			=> $this->request->getVar('username'),
							'password'		=> sha1($this->request->getVar('password')),
							'akses_level'			=> $this->request->getVar('akses_level'),
						);
			$model->edit($data);
			$session->setFlashdata('sukses', 'Data telah diupdate');
			return redirect()->to(base_url('admin/dasbor/akun'));
		}
		// End masuk database
	}

}
