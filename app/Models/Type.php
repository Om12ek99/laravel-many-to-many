<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table = 'type';
    protected $fillable = ['project_type'];
    public function projects(){
        // relazione diretta uno a molti
        return $this->hasMany(Project::class);
    }
}
