<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Champion extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'title', 'description', 'image', 'role_id'
    ];

    public function championSkills(){
        return $this->hasMany('App\ChampionSkill', 'champ_id');
    }

    public function championSkins(){
        return $this->hasMany('App\ChampionSkin', 'champ_id');
    }

    public function championRole(){
        return $this->belongsTo('App\ChampionRole', 'role_id');
    }
}
