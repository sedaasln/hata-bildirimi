<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    use HasFactory;
    protected $table='errors';
    protected $quarded=[];

    public function kategory(){
        return $this->belongsTo(Kategory::class,'kategoryId');
    }
    public function wagen(){
        return $this->belongsTo(Wagen::class,'wagenId');
    }
    public function kanal(){
        return $this->belongsTo(Kanal::class,'kanalId');
    }
}
