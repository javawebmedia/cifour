<?php namespace App\Models;

use CodeIgniter\Model;

class Kategori_model extends Model
{
	protected $table 		= 'kategori';
	protected $primaryKey 	= 'id_kategori';
	 protected $allowedFields = ['slug_kategori','nama_kategori','urutan'];
	
	// Listing
	public function listing()
	{
		$this->select('*');
		$this->orderBy('id_kategori','DESC');
		$query = $this->get();
		return $query->getResultArray();
	}

	// Detail
	public function detail($id_kategori)
	{
		$this->select('*');
		$this->where(array(	'id_kategori'	=> $id_kategori));
		$query = $this->get();
		return $query->getRowArray();
	}

	// Insert
	public function tambah($data)
	{
		$this->save($data);
	}

	// Edit
	public function edit($data)
	{
		$this->where('id_kategori',$data['id_kategori']);
		$this->replace($data);
	}

	// Delete
	public function hapus($id_kategori)
	{
		$this->where('id_kategori',$id_kategori);
		$this->delete();
	}
}