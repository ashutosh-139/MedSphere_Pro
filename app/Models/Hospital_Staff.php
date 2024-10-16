<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital_Staff extends Model
{
    use HasFactory;
    protected $table = "hospital_staff";

    protected $fillable = [
        'hospital_id',
        'staff_id',
        'name',
        'contact_no',
        'contact_mail',
        'doc_img',
        'specialization',
        'holiday',
        'status',
        'joing_date',
    ];

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

}
