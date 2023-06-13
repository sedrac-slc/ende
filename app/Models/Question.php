<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'uuid',
        'inquiry_id',
        'content',
        'type',
        'created_by',
        'updated_by',
    ];

    public function inquiry(){
        return $this->belongsTo(Inquiry::class);
    }

    public function options(){
        return $this->hasMany(Option::class);
    }

}
