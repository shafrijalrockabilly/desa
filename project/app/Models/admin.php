<?php

namespace App\Models;

use CodeIgniter\Model;

class admin extends Model
{

	protected $table 			= 'admin';
	protected $primaryKey 		= 'id';
	protected $returnType 		= 'object';
	protected $protectFields 	= false;
	protected $allowedFields 	= [];
}
?>