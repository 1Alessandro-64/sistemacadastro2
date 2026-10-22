<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;

#[Fillable(['brand', 'model', 'plate', 'year', 'status', 'user_id'])]
class Vehicle extends Model
{
    /** @use HasFactory<\Database\Factories\VehicleFactory> */
    use HasFactory;

    protected $fillable = ['brand', 'model', 'plate', 'year', 'status', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}