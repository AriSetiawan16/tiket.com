<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; // Uncomment jika Anda ingin menambahkan verifikasi email
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail // Uncomment jika Anda ingin menambahkan verifikasi email
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Pastikan Anda menggunakan Laravel 9 atau lebih baru
    ];

    // Jika Anda ingin menambahkan relasi atau metode lain, lakukan di sini
}
