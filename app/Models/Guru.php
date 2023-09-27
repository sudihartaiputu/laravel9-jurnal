<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Guru extends Authenticatable
{
    use Notifiable;

    protected $table = 'guru';
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'username',
        'nip',
        'nik',
        'tempat_lahir',
        'tanggal_lahir',
        'jk',
        'email',
        'password',
        'level',
        'foto',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
}
