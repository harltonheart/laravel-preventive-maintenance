<?php

namespace App\Models;

use App\Models\Weeklyschedule;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Monthlyschedule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function weekly()
    {
        return $this->hasMany(Weeklyschedule::class);
    }
}
