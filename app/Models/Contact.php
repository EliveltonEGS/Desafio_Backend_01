<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'contacts';
    protected $fillable = ['phone', 'email', 'cellphone', 'customer_id'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
