<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'address',
        'phone_number',
        'date_of_birth',
        'hire_date',
        'department_id',
        'position_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function entry_exit()
    {
        return $this->hasMany(EntryExit::class);
    }
    public function salary()
    {
        return $this->belongsTo(Salary::class);
    }
    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    public function position()
    {
        return $this->belongsTo(Position::class);
    }
    public function leave_requests()
    {
        return $this->hasMany(LeaveRequest::class);
    }
    public function training()
    {
        return $this->hasMany(Training::class);
    }

}
