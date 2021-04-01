<?php

namespace App\Models\contact;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactError extends Model
{
    use HasFactory;

    protected $fillable = [
        'contact',
        'errors'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
