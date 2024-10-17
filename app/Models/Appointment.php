<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'hospital_id',
        'stafff_id',
        'payment_mode', 
        'payment_id',
        'schedule_slot_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Hospital_Staff::class, 'stafff_id');
    }

    public function slot() 
    {
        return $this->belongsTo(Slot::class, 'schedule_slot_id');
    }
}
