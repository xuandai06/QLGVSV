<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic_details extends Model
{
    use HasFactory;
    public $incrementing = false;

    protected $fillable = [
        'topic_syllabus_id',
        'lecturer_id ',
        'role',
    ];

    public function topics_syllabuses()
    {
        return $this->belongsTo(Topic_syllabuses::class,'id');
    }
    public function lecturer()
    {
        return $this->belongsTo(Lecturer::class,'id');
    }
}
