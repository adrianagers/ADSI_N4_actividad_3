<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table ='students';
    protected $primaryKey ='id';

    protected $fillable=[
        'name',
        'lastname',
        'email',
        'phone',
        'work_days_id',
        'files_id',
        'teachers_id'
    ];
}
