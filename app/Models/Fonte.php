<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Fonte extends Model
{
    use HasFactory;
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
    use SoftDeletes;

    protected $table = 'fontes';

    public static function deleteFonteById($id)
    {

        $fonte = Fonte::find($id);
        $current_date_time = Carbon::now()->toDateTimeString();
        $fonte->deleted_at = $current_date_time;
        return $fonte->save();
    }

    public static function  dataToUser()
    {
        return DB::select('SELECT id, endereco, descricao FROM fontes');
    }
}
