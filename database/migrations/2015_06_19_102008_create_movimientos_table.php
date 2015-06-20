<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration {

    private $llenados;
    private $alquileres;

    public function __construct()
    {
        $this->llenados = new CreateLlenadosTable();
        $this->alquileres = new CreateAlquileresTable();
    }

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movimientos', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('cilindro_id')->unsigned();
            $table->integer('tercero_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->date('fecha1');
            $table->date('fecha2')->nullable();
            $table->enum('tipo', ['alquiler', 'recarga']);
            $table->enum('estado', ['activo', 'terminado']);
            $table->string('notas', 1000)->nullable();
			$table->timestamps();

            $table->foreign('cilindro_id')
                ->references('id')->on('cilindros')
                ->onUpdate('CASCADE')
                ->onDelete('NO ACTION');

            $table->foreign('tercero_id')
                ->references('id')->on('terceros')
                ->onUpdate('CASCADE')
                ->onDelete('NO ACTION');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onUpdate('CASCADE')
                ->onDelete('NO ACTION');
		});

        // Elimina las tablas alquileres y llenados de la base de datos.
        $this->alquileres->down();
        $this->llenados->down();

    } #up

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        // Crea las tablas llenados y alquileres en la base de datos.
        $this->llenados->up();
        $this->alquileres->up();

        // Elimina la tabla movimientos de la base de datos.
		Schema::drop('movimientos');
	}

}
