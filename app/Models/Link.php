<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use DOMDocument;


class Link extends Model
{
    use HasFactory;
    protected $dates = ['created_at','updated_at','deleted_at'];
    use SoftDeletes;
    
    protected $fillable = [
        'endereco',
        'descricao',
        'idFonte'
    ];
    
    public function fontes(){
        return $this->hasMany(Fonte::class,'id','FonteId');
    }

    public static function  dataToUSer()
    {
        return DB::select('SELECT l.id AS id, l.endereco AS endereco ,l.descricao AS descricao,
            f.endereco AS fonte FROM links AS l,
            fontes AS f WHERE l.idFonte=f.id AND l.deleted_at IS NULL');
    }

    public static function spiderLink($url){
        libxml_use_internal_errors(true);
        $html = file_get_contents($url);
        $domDocument = new DOMDocument();
        $domDocument->loadHTML($html);
        $linkTags = $domDocument->getElementsByTagName("a");
        $linkList = array();
        $linkValue = '';
        foreach($linkTags as $link){
            $href = $link->getAttribute('href');
            $linkValue = $href;
            if(!empty($href)&&$href!='#'){
                if($linkValue[0]=='/'){
                    $linkValue = $url.$linkValue;
                }
            }
            array_push($linkList,$linkValue);
        }
        return $linkList;
    }
    public static function countLink($fonte){
        return count(Link::spiderLink($fonte));
    }
}
