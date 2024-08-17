<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //jiga table tidak bisa di jamakan maka daftarkan otomatis dengan nama sama kaya di databases
    protected $table =  'students';
}
