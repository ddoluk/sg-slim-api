<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo';

    public $timestamps = false;

    protected $fillable = [
        'task'
    ];

}