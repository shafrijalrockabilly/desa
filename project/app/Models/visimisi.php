<?php

namespace App\Models;

use CodeIgniter\Model;

class visimisi extends Model
{
	protected $DBGroup 			= 'default';
	protected $table 			= 'visimisi';
    protected $primaryKey 		= 'id';
	protected $returnType 		= 'object';
	protected $protectFields 	= false;
	protected $allowedFields 	= [];

}
?>