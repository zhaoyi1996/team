<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yewu extends Model
{
    protected $table="yewu";
    protected $primaryKey="y_id";
    // 设置时间戳
    public $timestamps=false;
}
