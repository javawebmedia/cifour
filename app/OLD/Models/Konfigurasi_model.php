<?php namespace App\Models;

use CodeIgniter\Model;

class Konfigurasi_model extends Model
{
	protected $table 		= 'konfigurasi';
	protected $primaryKey 	= 'id_konfigurasi';

	// Main listing
	public function listing()
	{
		return $this->first();
	}

	// Detail
	public function detail($id_konfigurasi)
	{
		 return $this->asArray()
                     ->where(['id_konfigurasi' => $id_konfigurasi])
                     ->first();
	}

	// Detail
	public function detail2($id_konfigurasi)
	{
		$this->where('id_konfigurasi',$id_konfigurasi);
        return $this->first();
	}
}