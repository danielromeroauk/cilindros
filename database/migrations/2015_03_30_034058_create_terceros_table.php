<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTercerosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('terceros', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nit', 50)->unique();
			$table->string('nombre', 100);
			$table->enum('rol', ['cliente', 'proveedor']);
			$table->string('direccion', 100);
			$table->string('telefono', 50);
			$table->string('email')->nullable();
			$table->string('notas', 1000)->nullable();
			$table->integer('user_id')->unsigned();
			$table->timestamps();

			$table->foreign('user_id')
				->references('id')->on('users')
				->onUpdate('CASCADE')
				->onDelete('NO ACTION');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('terceros');
	}

}
