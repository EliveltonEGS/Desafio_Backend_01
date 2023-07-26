<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'customers';
    protected $fillable = ['name', 'type', 'identification'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}
