<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\payements;

class location extends Model
{
    use HasFactory;
    public function payements()
    {
        return $this->hasMany(payements::class);
    }
}
