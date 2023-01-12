<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'password',
        'idTipoUtilizador'
    ];

    protected $dates = ['created_at','updated_at','deleted_at'];

    public function tipoUtilizador(){
        return $this->belongsTo(TipoUtilizador::class);
    }

    public static function getIdTipoUserByEmail($email){
        $user = User::select('idTipoUtilizador')->where('email',$email)->first();
        return (!Assistent::isNull($user) ? $user->idTipoUtilizador : null);
    }
    public static function  dataToUSer()
    {
        return DB::select('SELECT u.id as id, u.name AS name ,u.email AS email,
            tu.tipo AS tipo FROM users AS u,
            tipo_utilizador AS tu WHERE u.idTipoUtilizador=tu.id AND u.deleted_at IS NULL');
    }
}
