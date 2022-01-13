<?php

namespace App\Models;

use App\Models\Computer;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function computers()
    {
        return $this->belongsTo(Computer::class, 'computer_id');
    }

    // public function departments()
    // {
    //     return $this->belongsTo(Department::class);
    // }

}
