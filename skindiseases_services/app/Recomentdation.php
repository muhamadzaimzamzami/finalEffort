<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recomentdation extends Model
{
    protected $fillable = [
        'name', 'url', 'deskripsi', 'category_id', 'image','public_id'
    ];
}
