<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Device extends Model
{
    public $table = "gates";
    public $timestamps = false;
    protected $fillable = ['name', 'gate_key', 'gate_status'];
    use HasFactory;
}
