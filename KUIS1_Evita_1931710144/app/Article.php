<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // karena tidak semua ditampilkan, maka menggunakan syntax :
    protected $fillable = ['title','continent','content','imageurl'];
}
