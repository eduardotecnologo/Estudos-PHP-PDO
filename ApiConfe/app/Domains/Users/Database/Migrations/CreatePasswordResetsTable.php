<?php 


namespace ApiConf\Domains\Users\Database\Migrations;

use ApiConf\Support\Database\Migration;


class CreatePasswordResetstable extends Migration

{
	public function up();
	{
		$this->schema->create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at')->nullable();
        });
	}

	public function down()
	{
		$this->schema->drop('password_resets');
	}
}