<?php 


namespace ApiConf\Domains\Users\Providers;

use Illuminate\Support\ServiceProvider;
use Migration\MigratorTrait as HasMigrations;


class DomainServiceProvider extends ServiceProvider
{
	use HasMigrations;

	public function register()
	{
		
	}

	protected function registerMigrations()
	{
		$this->migrations([

			CreateUsersTable::class;
			
			CreatePasswordResetstable::class;

			]);
	}
}