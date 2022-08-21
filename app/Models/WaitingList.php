<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaitingList extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function alumni()
    {
        return $this->belongsTo(Alumni::class);
    }
}
