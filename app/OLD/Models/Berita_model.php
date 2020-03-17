<?php namespace App\Models;

use CodeIgniter\Model;

class Berita_model extends Model
{
	protected $table 		= 'berita';
	protected $primaryKey 	= 'id_berita';
	 protected $allowedFields = ['judul_berita'];
	
	// Listing
	public function listing()
	{
		$this->select('berita.*, kategori.nama_kategori');
		$this->join('kategori','kategori.id_kategori = berita.id_kategori');
		$this->where('status_berita','Publish');
		$query = $this->get();
		return $query->getResult();
	}

	// Listing
	public function read($slug_berita)
	{
		$this->select('berita.*, kategori.nama_kategori');
		$this->join('kategori','kategori.id_kategori = berita.id_kategori');
		$this->where(array(	'status_berita'	=> 'Publish',
			'slug_berita'	=> $slug_berita));
		$query = $this->get();
		return $query->getRow();
	}

	// Insert
	public function tambah($data)
	{
		$this->save($data);
	}

	// Insert
	public function edit($data)
	{
		$this->where('id_berita',$data['id_berita']);
		$this->replace($data);
	}

	// Insert
	public function hapus($id_berita)
	{
		$this->where('id_berita',$id_berita);
		$this->delete();
	}
}