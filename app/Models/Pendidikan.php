<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikan';
    protected $guarded;
    use HasFactory;

    public function biodata(){
        return $this->belongsTo(Biodata::class);
    }
}
