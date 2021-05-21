<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nuovoArticolo extends Model
{
    use HasFactory;

    protected $table = 'articoli';
    protected $primaryKey = 'articoli.id';
}
