<?php

namespace Alexlatam\Crud\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'tasks';
    protected $fillable = ['name', 'description', 'status'];
    protected $guarded = ['id'];
}
