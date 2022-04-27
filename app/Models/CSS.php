<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CSS extends Model
{
    protected $table = 'cssquestion';
    protected $primaryKey = 'id';
    protected $fillable = ['question', 'optiona', 'optionb', 'optionc', 'optiond' ,'answer'];
}
