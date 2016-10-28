<?php

namespace ApiConf\Domains\Users\Database\Migrations;


class CreateUsersTable extends Migration

{
	public function up()
	{
		$this->schema->create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
	}

	public function down()

	{
		$this->schema->drop('users');
	}
}