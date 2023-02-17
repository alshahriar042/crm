<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadEntry extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function leadDetails()
    {
        return $this->hasMany(LeadDetails::class,'lead_id','id');
    }
}
