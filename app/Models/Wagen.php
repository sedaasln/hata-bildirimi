<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wagen extends Model
{
    use HasFactory;
    protected $table='wagens';
    protected $quarded=[];

    public function error(){
        return $this->HasOne(Error::class, 'wagenId', 'id');
    }
}
