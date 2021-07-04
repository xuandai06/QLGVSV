<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'name',
        'sex',
        'birthday',
        'hometown',
        'address',
        'phone_number',
        'note',
        'position_id',
        'level_id',
        'major_id'
    ];
}
