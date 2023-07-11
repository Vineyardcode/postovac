<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zaznamy extends Model
{
    use HasFactory;


    protected $fillable = ['id', 'jmeno', 'prijmeni', 'date'];

    protected $table = 'zaznamy';

}
