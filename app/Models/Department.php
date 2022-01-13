<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Device;
use App\Models\Computer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function computers()
    {
        return $this->hasMany(Computer::class);
    }
    public function devices()
    {
        return $this->hasMany(Device::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
