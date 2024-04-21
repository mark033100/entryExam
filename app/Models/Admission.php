<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    use HasFactory;
    protected $table = 'admission';
    protected $fillable = [
        'patientID',
        'Ward',
        'admissionDate',
        'dischargeDate'
    ];


    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }
}
