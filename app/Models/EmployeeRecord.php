<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_number',
        'offense_type',
        'offense_date',
        'description',
    ];

    // Definisikan relasi jika ada
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'id_number', 'id_number');
    }
}