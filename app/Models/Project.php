<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = 'project';

    protected $fillable = ['title', 'content', 'slug', 'type_id','tech_id','cover_image','user_id'];


    public function type(){
        // relazione inversa di uno a molti
        return $this->belongsTo(Type::class);
    }
    public function technologies(){
        return $this->belongsToMany(Technology::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
