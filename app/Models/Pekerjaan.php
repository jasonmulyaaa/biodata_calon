<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = 'pekerjaan';
    protected $guarded;
    use HasFactory;

    public function biodata(){
        return $this->belongsTo(Biodata::class);
    }
}
