<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_hero';

    protected $fillable = [
        'kode_hero',
        'foto',
        'desk',
        'link',
        'status',
    ];
}