<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChampionSkill extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'small_name', 'name', 'description', 'champ_id', 'image'
    ];

    public function championName(){
        return $this->belongsTo('App\Champion', 'champ_id');
    }

}
