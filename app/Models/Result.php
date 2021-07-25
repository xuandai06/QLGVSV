<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    public $incrementing = false;
    protected $primaryKey = 'work_id';
    protected $fillable = [
        'work_id',
        'status',
        'note',
    ];

    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}
