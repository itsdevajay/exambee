<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HTML extends Model
{
    protected $table = 'htmlquestion';
    protected $primaryKey = 'id';
    protected $fillable = ['question', 'optiona', 'optionb', 'optionc', 'optiond' ,'answer'];
}
