<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'uuid',
        'name',
        'created_by',
        'updated_by',
    ];

}
