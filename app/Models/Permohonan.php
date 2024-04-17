<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function evidence()
    {
        $this->hasMany(Evidence::class);
    }

    public function berkas()
    {
        $this->hasOne(Berkas::class);
    }
}
