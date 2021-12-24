<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cake extends Model {
    protected $fillable = ['nama', 'harga', 'stok', 'photo', 'keterangan'];
}
