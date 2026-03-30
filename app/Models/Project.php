<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
   protected $fillable = [
    'judul',
    'description',
    'tech_stack',
    'project_url'
];

protected $casts = [
    'tech_stack' => 'array'
];
}