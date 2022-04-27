<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cplus extends Model
{
    protected $table = 'cplusquestion';
    protected $primaryKey = 'id';
    protected $fillable = ['question', 'optiona', 'optionb', 'optionc', 'optiond' ,'answer'];
}
