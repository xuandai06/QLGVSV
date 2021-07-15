<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;
    public $incrementing = false;
    
    protected $fillable = [
        'id',
        'name',
        'detail',
        'note',
        'journal_id',
    ];

    public function journal()
    {
        return $this->belongsTo(Journals::class,'id');
    }
}
