<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table='users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nama', 'email', 'password','telepon','role','program_studi_kode_prodi','alamat','tanggal_lahir'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function mk_tawar(): BelongsToMany
    {
        return $this->belongsToMany(MkTawar::class,'dkbs','users_id','mk_tawar_id');
    }

    public function program_studi(): BelongsTo
    {
        return $this->belongsTo(ProgramStudi::class);
    }

    public function program_studi_nama()
    {
        return $this->belongsTo(ProgramStudi::class, 'program_studi_kode_prodi', 'kode_prodi');
    }
}
