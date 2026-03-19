<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $table = 'rentals';

    protected $fillable = ['user_id', 'costume_id', 'statusRental_id'];

    protected $hidden = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user');
    }

    public function costume()
    {
        return $this->belongsTo(Costume::class, 'costume_id');
    }

    public function rentals()
    {
        return $this->belongsTo(RentalStatus::class, 'rentalStatus_id');
    }
}
