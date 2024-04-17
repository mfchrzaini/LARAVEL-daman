<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evidence extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function permohonan()
    {
        $this->belongsTo(Permohonan::class);
    }
}
