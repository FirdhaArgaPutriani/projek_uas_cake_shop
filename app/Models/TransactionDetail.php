<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    protected $fillable = ['cake_id', 'transaction_id', 'jumlah', 'jumlah_harga'];

    public function cake() {
	    return $this->belongsTo('App\Models\Cake','cake_id', 'id');
	}

	public function transaction() {
	    return $this->belongsTo('App\Models\Transaction','transaction_id', 'id');
	}
}
