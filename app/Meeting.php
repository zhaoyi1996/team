<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    protected $table="meeting";
    protected $primaryKey="m_id";
    // 设置时间戳
    public $timestamps=false;
    protected $guarded = [];
}
