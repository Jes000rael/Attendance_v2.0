<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestTimeAdjustments extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendance_id',
        'request_type_id',
        'start_time',
        'end_time',
        'total_hours',
        'reason',
    ];

    public function requestTimetype()
{
    return $this->hasmany(RequestTimeType::class, 'request_type_id');
} 

    public $timestamps = false;
    protected $primaryKey = 'time_adjusment_id';


 
}
