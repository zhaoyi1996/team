<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehu extends Model
{
    protected $table = 'kehu';
    protected $primaryKey = 'k_id';
    public $timestamps = false;
    protected $guarded = [];
}
