<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    use HasFactory;

    public $incrementing = false;
    

    protected $fillable = [
        'id',
        'name',
        'subject_id',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id');
    }
}
