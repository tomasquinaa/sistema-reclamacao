<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    use HasFactory;

    public $table = "complaints";

    protected $fillable = ['client_id', 'area', 'message', 'status'];
}
