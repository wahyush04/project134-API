<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //ketika nama tabel berbeda
    protected $table = 'courses';
    // ketika kolom primaryKey bukan id, maka
    // tentukan nama kolom primaryKey nya.
    protected $primaryKey = 'id';
    // untuk menentukan pada kolom apa saja yang boleh di masukkan data
    protected $fillable = ['name', 'description', 'price', 'institution_id'];

    public function lembaga()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }
}
