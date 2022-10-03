<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategory extends Model
{
    use HasFactory;
    protected $table='kategories';
    protected $quarded=[];

    public function error(){
        return $this->HasOne(Error::class, 'kategoryId', 'id');
    }
}
