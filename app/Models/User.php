<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\MustVerifyEmail;
=======
// use Illuminate\Contracts\Auth\MustVerifyEmail;
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;
=======
use Illuminate\Database\Eloquent\SoftDeletes; 
/*ini untuk mengatur soft delete kita*/

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;/*ini untuk mengatur soft delete kita*/
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var string[]
=======
     * @var array<int, string>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'occupation',
<<<<<<< HEAD
        'phone', 
        'address',
        'is_admin',
        'email_verified_at'
    ];
=======
        'phone',
        'address',
        'is_admin'
    ];
    /*ini kita lengkapi sesuai dengan isi tabelnya*/
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<int, string>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
<<<<<<< HEAD
     * @var array
=======
     * @var array<string, string>
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
