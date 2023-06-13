<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'uuid',
        'title',
        'created_by',
        'updated_by',
    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }

}
