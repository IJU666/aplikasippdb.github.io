<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class pengguna extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var string[]
         */
        protected $table = "pengguna";
        protected $primaryKey = "id";
        // protected $fillable = [
        //     'email',
        //     'password',
        // ];
        protected $guarded = ['id'];


    
        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];
    
        /**
         * The attributes that should be cast.
         *
         * @var array
         */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        public function biodatasiswa(){
            return $this->hasOne(Biodatasiswa::class, 'pengguna', 'id');
        }

        public function minatjurusan(){
            return $this->hasOne(minatjurusan::class, 'pengguna', 'id');
        }

        public function asalsekolah(){
            return $this->hasOne(asalsekolah::class, 'pengguna', 'id');
        }

        public function ortu(){
            return $this->hasOne(ortu::class, 'pengguna', 'id');
        }

        public function biaya(){
            return $this->hasOne(persyaratan::class, 'pengguna', 'id');
        }
        public function dokumen(){
            return $this->hasOne(dokumengambar::class, 'pengguna', 'id');
        }
        public function wali(){
            return $this->hasOne(wali::class, 'pengguna', 'id');
        }

        public function pembayaran(){
            return $this->hasOne(uploadpembayaran::class, 'pengguna', 'id');
        }
    
}
