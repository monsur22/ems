<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'training_program',
        'date',
        'provider'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
