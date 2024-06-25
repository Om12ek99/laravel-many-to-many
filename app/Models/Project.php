<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = ['title', 'content', 'slug'];


    public function type(){
        // relazione inversa di uno a molti
        return $this->belongsTo(Type::class);
    }
}
