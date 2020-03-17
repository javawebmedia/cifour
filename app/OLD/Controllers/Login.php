<?php namespace App\Controllers;

use App\Models\Konfigurasi_model;

class Login extends BaseController
{

	// Halaman login
	public function index()
	{
		helper('form');
		$model 			= new Konfigurasi_model();
		$konfigurasi 	= $model->listing();
		$data = array(	'title'			=> 'Login Administrator - '.$konfigurasi['namaweb'],
						'konfigurasi'	=> $konfigurasi,
					);
		return view('login/index',$data);
	}

	// Test
	public function test($id_konfigurasi)
	{
		$model 			= new Konfigurasi_model();
		$konfigurasi 	= $model->detail($id_konfigurasi);
		print_r($konfigurasi);
	}

	// Logout
	public function logout()
	{
		// Proses logout
	}

	//--------------------------------------------------------------------

}
