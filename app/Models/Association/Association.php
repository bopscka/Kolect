<?php

namespace App\Models\Association;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $table = 'associations';
    protected $fillable = ['id', 'nom', 'effectif', 'description'];
}
