<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vers extends Model
{
    protected $table = 'ver';
    protected $dates =  ['created_at', 'updated_at'];
    protected $fillable = ['id', 'version', 'min_version'];
}
