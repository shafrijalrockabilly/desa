<?php

namespace App\Models;

use CodeIgniter\Model;

class struktur extends Model
{
	protected $DBGroup 			= 'default';
	protected $table 			= 'struktur';
	protected $primaryKey 		= 'nik';
	protected $returnType 		= 'object';
	protected $protectFields 	= false;
	protected $allowedFields 	= [];

}
?>