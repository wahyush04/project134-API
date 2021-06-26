<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
//    protected $table = 'exams';
    protected $primaryKey = 'id_a';
    public $timestamps = true;

    protected $fillable = ['judul_43', 'abstrak_43'];
}
