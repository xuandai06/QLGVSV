<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kind_of_science extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
    ];
}
