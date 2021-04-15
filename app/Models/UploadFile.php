<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['name', 'surname','email','photo'];
}
