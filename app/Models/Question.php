<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Question extends Model {
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'subject_id', 'question', 'answer_id'
    ];
}
