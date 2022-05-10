<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'task_id'
    ];

    public function users(){
        return $this->belongsToMany('App\Models\User' , 'task_user');
    }

    
    public function project(){
        return $this->belongsTo('App\Models\Project');
    }

    public function tasks(){
        return $this->hasMany('App\Modles\Task');
    }

}
