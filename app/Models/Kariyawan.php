<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kariyawan extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'name',
        'jabatan_id',
        'gajih'
    ];
    protected $table = "kariyawans";

    public function jabatan()

    {
        return $this->belongsTo(Jabatan::class);
    }
}
