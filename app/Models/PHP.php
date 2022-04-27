<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PHP extends Model
{
    protected $table = 'phpquestion';
    protected $primaryKey = 'id';
    protected $fillable = ['question', 'optiona', 'optionb', 'optionc', 'optiond' ,'answer'];
}
