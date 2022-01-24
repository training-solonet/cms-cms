<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataUser extends Model
{
    use HasFactory;

    protected $fillable = [
        "namaDepan",
        "namaBelakang",
        "no_telp",
        "email",
        "number",
        "id_training"
    ];

    public function dataAdmin()
    {
        return $this->belongsTo(dataAdmin::class, 'id_training');
    }
}
