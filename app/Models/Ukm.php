<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukm extends Model
{
    use HasFactory;

    protected $table = 'ukm';
    protected $guarded = ['id'];

    public function penguruses() {
        return $this->hasMany(Pengurus::class);
    }
}
