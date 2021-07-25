<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $fillable = [
        'id',
        'name',
        'start_time',
        'end_time',
        'place',
        'note'
    ];

    public function result()
    {
        return $this->hasOne(Result::class);
    }

    public function work_assignments(){
        return $this->hasMany(Work_assignment::class);
    }
}
