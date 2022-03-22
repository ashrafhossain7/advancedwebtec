<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;
    protected $table='students_info';//name of the table we want to input data to
    //by default it things the primary key is id , but if primary key is not id
    //protected $primarykey = 'user_id'; // somehting like that 
    //protected $incrementing = false;//if we want to increment our primary key manually 
    //protected $keyType='string';//for string type primary key, if the primary key is srting primary key auto incrementing feature will be turned off
    //protected $connection ='';//this wil be  needed when we will work with multiple databse 
    public $timestamps= false;//if this is turned as false createdat and updated at will not be need in the database.
}
