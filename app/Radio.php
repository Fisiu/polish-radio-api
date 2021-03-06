<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Radio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'url', 'stream_url', 'logo_url'
    ];

}
