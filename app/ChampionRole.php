<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChampionRole extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

//    public function championRoles(){
//        return $this->belongsTo('App\Champion', 'role_id');
//    }
}
