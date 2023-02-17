<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadDetails extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function lead()
    {
        return $this->belongsTo(LeadEntry::class,'id','lead_id');
    }
}
