<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    use HasFactory;
    protected $fillable = [
        'noPO',
        'tglPO',
        'segmen',
        'namaPkj',
        'statusPkj',
        'ppn',
    ];
    protected $table = ['tambahPO'];
    protected $primaryKey = ['id'];
}
