<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    protected $fillable = [
        'id_users','prosentase','image','category_id'
    ];
}
