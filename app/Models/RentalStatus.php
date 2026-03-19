<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalStatus extends Model
{
    protected $fillable = ['description'];

    public function rentals()
    {
        return $this->hasMany(Rental::class, 'rentalStatus_id');
    }
}
