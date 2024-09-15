<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Hospital_Staff;

class Hospital extends Model
{
    use HasFactory;

    protected $fillablable = [
        'name',
        'address',
        'description',
        'contact_no',
        'contact_mail',
        'hospital_img',
        'appointment_fee',
        'payment_id'
    ];

    public function staff(): HasMany
    {
        return $this->hasMany(Hospital_Staff::class, 'hospital_id', '_id');
    }
}
