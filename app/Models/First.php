<?php

namespace App\Models;

use App\Models\Computer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class First extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function computers()
    {
        return $this->belongsTo(Computer::class, 'computer_id');
    }
}
