<?php

namespace Edu;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model

{


	protected $casts = [

		'special_customer' => 'boolean',
	];
    
		public function purchases()

		{

			return $this->hasMany(Puchases::class);

		}

			
}
