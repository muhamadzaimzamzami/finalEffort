<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'name', 'url', 'deskripsi', 'image','public_id'
    ];
}
