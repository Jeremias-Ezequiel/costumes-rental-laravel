<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Costume extends Model
{
    use SoftDeletes;

    protected $table = 'costumes';

    protected $fillable = ['description', 'size', 'costumeStatus_id'];

    protected $hidden = ['deleted_at', 'updated_at'];

    public function costumeStatuses()
    {
        return $this->belongsTo(CostumeStatus::class, 'costumeStatus_id');
    }

    public function rentals()
    {
        return $this->hasMany(Rental::class, 'costume_id');
    }
}
