<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'code', 'full_name'
    ];

    public function users(){
        return $this->belongsToMany(User::class)
    	->withPivot('level')
    	->withTimestamps();
    }
}
