<?php

namespace App\Models\file;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    /*
     * Constantes usadas para definir los estados del archivo
     */
    const STATUS_EN_ESPERA = 'en espera';
    const STATUS_PROCESANDO = 'procesando';
    const STATUS_FALLIDO = 'fallido';
    const STATUS_TERMINADO = 'terminado';

    protected $fillable = [
        'name',
        'path',
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
