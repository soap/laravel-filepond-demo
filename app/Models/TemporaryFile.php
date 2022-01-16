<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Simple model to store tempoarary file submit before related model was created.
 * 
 */
class TemporaryFile extends Model
{

    protected $fillable = [
        'folder', 'filename'
    ];
}
