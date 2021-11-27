<?php

namespace App\Models;

use App\Filters\QueryFilter;
use App\Traits\HasFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory, HasFilter;

    const LEVEL = ['beginer', 'immediately', 'advance', 'master', 'profesor'];

    protected $fillable = [
        'name',
        'views',
        'level',
        'length',
    ];

}
