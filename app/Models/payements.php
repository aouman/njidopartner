<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\location;

class payements extends Model
{
    use HasFactory;

    protected $fillable = ['montant','statut','date_paiement'];

    public function location()
    {
        return $this->belongsTo(locations::class);
    }
}
