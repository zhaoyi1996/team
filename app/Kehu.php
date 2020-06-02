<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehu extends Model
{
    protected $table="kehu";
    protected $primaryKey="k_id";
    // 设置时间戳
    public $timestamps=false;
}
