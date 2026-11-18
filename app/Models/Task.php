<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    protected $table = 'table_tasks';

    protected $fillable = [
        'title',
        'commentaire',
        'is_completed',
    ];
}