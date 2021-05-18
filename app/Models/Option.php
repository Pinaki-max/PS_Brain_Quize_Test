<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Option extends Model{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'question_id', 'option'
    ];

    public function questions(){
        return $this->belongsTo(Question::class);
    }
}
