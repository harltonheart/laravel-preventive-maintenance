<?php

namespace App\Models;

use App\Models\Post;
use App\Models\First;
use App\Models\Forth;
use App\Models\Third;
use App\Models\Remark;
use App\Models\Second;
use App\Models\Computer;
use App\Models\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Computer extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected static function boot(){ 

    parent::boot();

    static::created(function ($computer){

        $computer->posts()->create([     
            'mouse' => null, 
            'kboard' => null,
            'monitor' => null,
            'cpu' => null,
            'avr_ups' => null,
            'printer' => null,
            'bargun' => null,
            'sysboot' => null,
            'os' => null,
            'antivirus' => null,
            'ms_office' => null,
            'his' => null,
            'mms' => null,
            'emr' => null,
            'queui_sys' => null,
            'weblis' => null,
            'computer_id' => $computer->id,
            ]);
        });
    }

    public function departments()
    {
        return $this->belongsTo(Department::class, 'department_id'); //because of select option concept
    }

    public function posts()
    {
        return $this->hasOne(Post::class);
    }

    public function firststatus()
    {
        return $this->hasOne(First::class);
    }

    public function secondstatus()
    {
        return $this->hasOne(Second::class);
    }

    public function thirdstatus()
    {
        return $this->hasOne(Third::class);
    }

    public function forthstatus()
    {
        return $this->hasOne(Forth::class);
    }

    public function remarks()
    {
        return $this->hasMany(Remark::class);
    }
    public function scopeAllStatus($query)
    {
        $query->with('firststatus', 'secondstatus', 'thirdstatus', 'forthstatus'); 
    }
    // public function scopeActive()
    // {
    //     return $query->where('active', 1);
    // }
    
}
