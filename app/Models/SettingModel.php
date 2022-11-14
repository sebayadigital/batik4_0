<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;

    protected $table = 'setting';

    protected $fillable = [
        'id_kec_toko',
        'nama_kec_toko',
        'id_kab_toko',
        'nama_kab_toko',
        'id_prov_toko',
        'nama_prov_toko',
        'url_desain',
        'no_toko'
    ];

    protected $hidden = [];
}
