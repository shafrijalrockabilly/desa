<?php

namespace App\Models;

use CodeIgniter\Model;

class rtrw extends Model
{
	protected $DBGroup 			= 'default';
	protected $table 			= 'rtrw';
	protected $primaryKey 		= 'nik';
	protected $returnType 		= 'object';
	protected $protectFields 	= false;
	protected $allowedFields 	= [];

}
?>