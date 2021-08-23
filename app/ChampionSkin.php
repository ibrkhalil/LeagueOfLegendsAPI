<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChampionSkin extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'champ_id', 'image'
    ];
}
