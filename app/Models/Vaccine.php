<?php

// app/Models/Vaccine.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'doses_required',
    ];
}
