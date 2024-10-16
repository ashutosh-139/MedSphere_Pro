<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;

    protected $fillable = [
        'hospital_id',
        'slot',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
}
