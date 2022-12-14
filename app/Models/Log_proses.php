<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log_proses extends Model
{
    use HasFactory;

    protected $table = 'log_proses';

    protected $fillable = [
        'id_transaksi', 'id_proses'
    ];

    protected $hidden = [];
}
