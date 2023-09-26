<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'biodata';
    protected $guarded;
    use HasFactory;

    public function pendidikan() {
        return $this->hasMany(Pendidikan::class);
    }

    public function pelatihan() {
        return $this->hasMany(Pelatihan::class);
    }

    public function pekerjaan() {
        return $this->hasMany(Pekerjaan::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
