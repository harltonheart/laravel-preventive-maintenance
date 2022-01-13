<?php

namespace App\Models;

use App\Models\Monthlyschedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Weeklyschedule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function monthly()
    {
        return $this->belongsTo(Monthlyschedule::class); //because of select option concept
    }
}
