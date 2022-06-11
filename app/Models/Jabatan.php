<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    // protected $guarded = [];

    protected $fillable = [
        'jabatan'
    ];

    protected $table = 'jabatans';

    public function kariyawan()

    {

        return $this->hasMany(Kariyawan::class);
    }
}
