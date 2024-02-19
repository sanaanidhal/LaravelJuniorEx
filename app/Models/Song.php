<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'songtitle',
        'artist',
        'description',
        'songlink',
        'lyrics',
        'platform'


    ];
    public $timestamps = false;
}

