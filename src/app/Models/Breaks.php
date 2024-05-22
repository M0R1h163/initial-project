<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Breaks extends Model
{
    use HasFactory;

    protected $fillable = [
        'attendances_id',
        'start_time',
        'end_time',
    ];

    public function attendance()
    {
        return $this->belongsTo(attendance::class);
    }
}
