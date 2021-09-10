<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table ='files';
    protected $primaryKey ='id';

    protected $fillable=[
        'name',
        'work_days_id'
    ];
}
