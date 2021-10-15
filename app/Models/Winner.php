<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;
    protected $fillable = ['contest_id'];

    public function contests()
    {
       return $this->hasOne(Contest::class,'id','contest_id');
    }
}
