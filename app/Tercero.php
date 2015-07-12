<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model {

	protected $table = 'terceros';

    protected $fillable = [
        'nit', 'nombre', 'rol', 'direccion', 'telefono', 'email', 'notas'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cilindros()
    {
        return $this->hasMany('App\Cilindro');
    }

    public function movimientos()
    {
        return $this->hasMany('App\Movimiento');
    }

} #Tercero
