<?php namespace App\Models;

use CodeIgniter\Model;

class Kecamatan_model extends Model
{
	protected $table 		= 'kecamatan';
	protected $primaryKey 	= 'id_kecamatan';
	
	// Listing
	public function listing()
	{
		$query = $this->get();
		return $query->getResult();
	}

	// Listing
	public function listing_array()
	{
		$query = $this->get();
		return $query->getResultArray();
	}
}