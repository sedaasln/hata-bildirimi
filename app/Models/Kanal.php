<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kanal extends Model
{
    use HasFactory;
    protected $table='kanals';
    protected $quarded=[];

    public function error(){
        return $this->HasOne(Error::class, 'kanalId', 'id');
    }
}
