<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
	public $table = "persons";
    public $incrementing = true;
    public $timestamps = false;

    protected $fillable = ['name', 'age', 'phone', 'monthly_fee'];
}
