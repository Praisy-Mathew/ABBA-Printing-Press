<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $table = 'team'; // Set the table name

    protected $fillable = ['name', 'department', 'photo', 'location'];
}
