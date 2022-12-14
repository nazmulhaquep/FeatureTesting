<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Test extends Model
{
//    use HasFactory;
    protected $table = "tests";

    protected $fillable = [
        'name', 'mobile_no', 'address',
    ];
}
