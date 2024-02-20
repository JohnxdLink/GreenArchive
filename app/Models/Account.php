<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'archive_accounts';
    protected $fillable = [
        'name',
        'email',
        'password',
        'confirmed_password',
        'location',
        'occupation',
        'bio',
        'certified_botanist',
        'agree_terms'
    ];
}
