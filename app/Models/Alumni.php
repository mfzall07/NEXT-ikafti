<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public function waiting_list()
    {
        return $this->hasOne(WaitingList::class);
    }
}
