<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work_detail extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = ['work_id','lecturer_id'];
    protected $fillable = [
        'work_id',
        'lecturer_id',
        'role',
        'note',
    ];
}
