<?php

namespace App\Models;

use App\Models\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory, UuidTrait;

    public $incrementing = false;
    protected $keyType = 'uuid';
    protected $fillabel = ['name', 'description', 'video'];

    public function modules()
    {
        return $this->hasMany(Lesson::class);
    }
}
