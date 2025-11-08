<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = 'tin_tucs';
    protected $fillable = [
        'tieude',
        'tomtat',
        'noidung',
        'hinhanh',
        'ngaydang'
    ];
}
