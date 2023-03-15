<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntryExit extends Model
{
    use HasFactory;
    protected $fillable = [
        'employee_id',
        'login_time',
        'logout_time',
        'status',
        'approved_by',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
