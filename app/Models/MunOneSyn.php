<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MunOneSyn extends Model
{
    protected $table="fs_mun_l1_syn";
    public $timestamps=false;
    protected $guarded=false;
    public function parent()
    {
        return $this->hasOne(MunOne::class,'l1_id','id');
    }
}
