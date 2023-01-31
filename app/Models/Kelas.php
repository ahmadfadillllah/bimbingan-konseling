<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';

    protected $guarded = [];

    public function wali()
    {
        return $this->belongsTo(User::class, 'wali_id');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class);
    }
}
