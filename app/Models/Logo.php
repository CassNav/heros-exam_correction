<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;
    static function summon_logos(){
        return Logo::select ('id','logo_img')
        ->order('id','asc')
        ->get();
    }
}
