<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable=['name','address','decription','image','rating','phone'];

    public function getImageAttribute($value)
    {
        return $value ? url('/' . $value) : null;
    }
}
