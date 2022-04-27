<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PY extends Model
{
    protected $table = 'pyquestion';
    protected $primaryKey = 'id';
    protected $fillable = ['question', 'optiona', 'optionb', 'optionc', 'optiond' ,'answer'];
}
