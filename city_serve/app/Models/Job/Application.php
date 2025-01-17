<?php

namespace App\Models\Job;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table='applications';
    protected $fillable=['id',
    'job_id',
    'cv',
    'job_id',
    'user_id',
    'job_image',
    'job_title',
    'job_region',
    'company',
    'job_type',
];
}
