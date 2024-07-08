<?php

namespace App\Models;

use CodeIgniter\Model;

class sejarah extends Model
{
	protected $DBGroup 			= 'default';
	protected $table 			= 'sejarah';
    protected $primaryKey 		= 'id';
	protected $returnType 		= 'object';
	protected $protectFields 	= false;
	protected $allowedFields 	= [];

}
?>