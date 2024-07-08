<?php

namespace App\Models;

use CodeIgniter\Model;

class home extends Model
{
	protected $DBGroup 			= 'default';
	protected $table 			= 'home';
    protected $primaryKey 		= 'id';
	protected $returnType 		= 'object';
	protected $protectFields 	= false;
	protected $allowedFields 	= [];

}
?>