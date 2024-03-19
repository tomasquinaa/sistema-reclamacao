<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserComplaints extends Model
{
    use HasFactory;

    public $table = "user_complaints";

    protected $fillable = ['user_id', 'complaint_id'];
}
