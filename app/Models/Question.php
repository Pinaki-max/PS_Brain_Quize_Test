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

    public function users(){
        return $this->belongsToMany(User::class)
        ->withPivot('answer_id')
        ->withTimestamps();
    }

    public function options(){
        return $this->hasMany(Option::class);
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

}
