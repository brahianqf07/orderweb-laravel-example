<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $table = 'activity';
    protected $fillable = [
        'description',
        'hours',
        'techniciam_id',
        'type_activity_id'
    ];

    public function technician()
    {
        return $this->belongsTo(Technician::class, 'technician_id');
    }

    public function type_activity()
    {
        return $this->belongsTo(Technician::class, 'type_activity_id');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}