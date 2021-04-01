<?php

namespace App\Models\contact;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'birthdate',
        'phone_number',
        'address',
        'credit_card',
        'franchise',
        'email'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
